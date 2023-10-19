<?php

namespace backend\controllers;

use common\models\Comment;
use common\models\Test;
use Yii;
use yii\rest\ActiveController;
use yii\web\Controller;

class TestController extends ActiveController
{
    public $modelClass = 'common\models\User';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}