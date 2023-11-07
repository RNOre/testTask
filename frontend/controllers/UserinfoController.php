<?php

namespace frontend\controllers;

use dektrium\user\models\User;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\ActiveController;

class UserinfoController extends ActiveController
{
    public $modelClass = '\dektrium\user\models\User';

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
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];
        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['update']);
        return $actions;
    }

    public function actionUpdate()
    {
        $city = \Yii::$app->request->post('city');
        $username = \Yii::$app->request->post('username');
        $phone = \Yii::$app->request->post('phone');
        $firstname = \Yii::$app->request->post('firstname');
        $lastname = \Yii::$app->request->post('lastname');
        $patronymic = \Yii::$app->request->post('patronymic');

        $user = User::findOne(['username' => $username]);

        $user->username = $username;
        $user->city = $city;
        $user->phone = $phone;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->patronymic = $patronymic;

        $user->save();
        return $user;
    }
}