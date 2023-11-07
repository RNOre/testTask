<?php

namespace frontend\controllers;

use common\models\Comment;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\web\Controller;

class UserdataController extends Controller
{
    public $modelClass = 'common\models\Comment';

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
            'usercomments'=>['GET', 'OPTIONS', 'POST', 'HEAD']
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

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

    public function actionIndex()
    {
        \Yii::$app->response->format=\yii\web\Response::FORMAT_JSON;
        $userId = \Yii::$app->request->post('userId');
        $comments = Comment::findAll(['userId'=>$userId]);
        return $comments;
    }
}