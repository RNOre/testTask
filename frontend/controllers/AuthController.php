<?php

namespace frontend\controllers;

use Cassandra\Date;
use Cassandra\Time;
use dektrium\user\models\RegistrationForm;
use dektrium\user\models\User;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\web\Controller;

class AuthController extends Controller
{
    public $enableCsrfValidation = false;

//    public $modelClass = 'frontend\models\Auth';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();

//        $behaviors['authenticator'] = [
//            'class' => \sizeg\jwt\JwtHttpBearerAuth::class,
//            'except' => [
//                'login',
////                'refreshToken',
//                'refresh',
//                'options',
//            ],
//        ];
//
//        unset($behaviors['authenticator']);
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Allow-Origin' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'COPY'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => null,
                'Access-Control-Max-Age' => 86400,
                'Access-Control-Expose-Headers' => [],
            ],
        ];
//        $behaviors['authenticator'] = [
//            'class' => HttpBearerAuth::class,
//        ];
        return $behaviors;
    }



//    public function behaviors()
//    {
//        $behaviors = parent::behaviors();
//
//        $behaviors['authenticator'] = [
//            'class' => \sizeg\jwt\JwtHttpBearerAuth::class,
//            'except' => [
//                'login',
////                'refreshToken',
//                'refresh',
//                'options',
//            ],
//        ];
//
//        return $behaviors;
//    }

    protected function verbs()
    {
        return [
            'login' => ['POST', 'GET', 'HEAD', 'OPTIONS',], //instead of  'index' => ['GET', 'HEAD']
            'refresh' => ['POST', 'GET', 'HEAD', 'OPTIONS',], //instead of  'index' => ['GET', 'HEAD']
            'generateJwt' => ['POST', 'GET', 'HEAD', 'OPTIONS',], //instead of  'index' => ['GET', 'HEAD']
            'generateRefreshToken' => ['POST', 'GET', 'HEAD', 'OPTIONS',], //instead of  'index' => ['GET', 'HEAD']
        ];
    }

    public function actionLogin()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $login = \Yii::$app->request->post('login');
        $email = \Yii::$app->request->post('email');
        $password = \Yii::$app->request->post('password');

        $userReg = new RegistrationForm();

        $userReg->username = $login;
        $userReg->password = $password;
        $userReg->email = $email;

        $userReg->register();

        $user = User::findByUsername($userReg->username);
//        dd($user);
        $token = $this->generateJwt($user);
//        dd((string)$token);
        $user->access_token = $token;

        $refreshToken = $this->generateRefreshToken($user);
//        $this->generateRefreshToken($user);

        return [
            'user' => $user,
            'token' => (string)$token,
            'refreshToken' => (string)$refreshToken,
//            'id'=>$user->id
        ];
    }

    public function actionLogout()
    {
    }

    public function actionRefresh()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $refreshToken = \Yii::$app->request->post('refreshToken');

        if (!$refreshToken) {
            return new \yii\web\UnauthorizedHttpException('No refresh token found.');
        }

        $user = User::findOne(['refresh_token' => $refreshToken]);
//        dd($userRefreshToken);
        if (\Yii::$app->request->getMethod() == 'POST') {
            if (!$user) {
                return new \yii\web\UnauthorizedHttpException('The refresh token no longer exists.');
            }

            $token = $this->generateJwt($user);
            $user->access_token = (string)$token;
            $refreshToken = $this->generateRefreshToken($user);

            return [
                'status' => 'ok',
                'token' => (string)$token,
                'refreshToken' => (string)$refreshToken
            ];
        } else {
            return new \yii\web\UnauthorizedHttpException('The user is inactive.');
        }
    }

    private function generateJwt(User $user)
    {
        $jwt = \Yii::$app->jwt;
        $signer = $jwt->getSigner('HS256');
        $key = $jwt->getKey();
        $time = time();

        $jwtParams = \Yii::$app->params['jwt'];
//        dd($jwt->getBuilder()->issuedBy(['issuer'])->getToken($signer, $key));
        return $jwt->getBuilder()
            ->issuedBy($jwtParams['issuer'])
            ->permittedFor($jwtParams['audience'])
            ->identifiedBy($jwtParams['id'], true)
            ->issuedAt($time)
            ->expiresAt($time + $jwtParams['expire'])
            ->withClaim('uid', $user->id)
            ->getToken($signer, $key);
    }

    private function generateRefreshToken(User $user, User $impersonator = null)
    {
        $refreshToken = \Yii::$app->security->generateRandomString(200);

        // TODO: Don't always regenerate - you could reuse existing one if user already has one with same IP and user agent
        $user->refresh_token = $refreshToken;
//        $userRefreshToken = new \app\models\UserRefreshToken([
//            'urf_userID' => $user->id,
//            'urf_token' => $refreshToken,
//            'urf_ip' => Yii::$app->request->userIP,
//            'urf_user_agent' => Yii::$app->request->userAgent,
//            'urf_created' => gmdate('Y-m-d H:i:s'),
//        ]);
        if (!$user->save()) {
            throw new \yii\web\ServerErrorHttpException('Failed to save the refresh token: ' . $user->getErrorSummary(true));
        }

//TODO: make migration to change access_token column to text or $this->alterColumn('user', 'access_token', $this->string(350))
        // Send the refresh-token to the user in a HttpOnly cookie that Javascript can never read and that's limited by path
        \Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'refresh-token',
            'value' => $refreshToken,
            'httpOnly' => true,
            'sameSite' => 'none',
            'secure' => true,
//            'expire'=>time()+180,
//            'path' => 'http://localhost:20080/auth/refresh-token',  //endpoint URI for renewing the JWT token using this refresh-token, or deleting refresh-token
//            'path' => 'http://localhost:20080/auth/refresh-token'
            'path' => ''
        ]));
//        dd($_COOKIE);
        return $refreshToken;
    }
}