<?php

namespace frontend\controllers;

use dektrium\user\controllers\RegistrationController;
use dektrium\user\Finder;
use dektrium\user\helpers\Password;
use dektrium\user\Mailer;
use dektrium\user\models\RegistrationForm;
use dektrium\user\models\SettingsForm;
use dektrium\user\models\User;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\web\Controller;

class LoginController extends Controller
{
    public $modelClass = 'common\models\User';

    public $enableCsrfValidation = false;


    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    protected function verbs()
    {
        return [
            'index' => ['POST', 'GET', 'HEAD', 'OPTIONS',], //instead of  'index' => ['GET', 'HEAD']
            'view' => ['GET', 'HEAD', 'OPTIONS'],
            'create' => ['POST', 'OPTIONS'],
            'update' => ['PUT', 'PATCH', 'OPTIONS'],
            'delete' => ['DELETE', 'OPTIONS'],
            'checkUser' => ['POST', 'OPTIONS'],
            'testUser' => ['POST', 'OPTIONS'],
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        unset($behaviors['authenticator']);
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
        return $behaviors;
    }

    public function actionCheck()
    {
        $login = \Yii::$app->request->post('login');
        $password = \Yii::$app->request->post('password');
        $user = User::findByUsername($login);
        if (!$user) {
            return \Yii::$app->response->setStatusCode(403);
        }

        if ($user->validatePassword($password) == $password) {
            return $user->verification_token;
        }
        return \Yii::$app->response->setStatusCode(403);
    }

    public function actionCreate()
    {
        $login = \Yii::$app->request->post('login');
        $email = \Yii::$app->request->post('email');
        $password = \Yii::$app->request->post('password');

        $user = new RegistrationForm();

        $user->username = $login;
        $user->password = $password;
        $user->email = $email;

        $user->register();
        $mailer = new Mailer();
        $settingsForm = new SettingsForm($mailer);

        $settingsForm->save();
    }

    private function generateJwt(User $user)
    {
        $jwt = \Yii::$app->jwt;
        $signer = $jwt->getSigner('HS256');
        $key = $jwt->getKey();
        $time = time();

        $jwtParams = \Yii::$app->params['jwt'];

        return $jwt->getBuilder()
            ->getToken($signer, $key);
    }
}