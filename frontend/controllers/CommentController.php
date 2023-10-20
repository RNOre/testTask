<?php

namespace frontend\controllers;

use common\models\Comment;
use common\models\User;
use common\models\Test;
use Yii;
use yii\filters\AccessControl;
use yii\filters\Cors;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\web\Controller;

class CommentController extends ActiveController
{
    public $modelClass = 'common\models\Comment';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];


    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
            'cors' => [
                // restrict access to
                'Origin' => ['*'],
                // Allow  methods
                'Access-Control-Request-Method' => ['POST', 'PUT', 'OPTIONS', 'GET', 'DELETE'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Headers' => ['Content-Type'],
                // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
//                'Access-Control-Allow-Credentials' => true,
                // Allow OPTIONS caching

                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['*']
            ],
        ];
        return $behaviors;
    }
}