<?php

namespace frontend\controllers;


use Yii;
use yii\filters\auth\HttpBearerAuth;

class ItemController extends CommentController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        if (Yii::$app->getRequest()->getMethod() !== 'OPTIONS') {
            $behaviors['authenticator'] = [
                'class' => HttpBearerAuth::className(),
            ];
        }
        return $behaviors;
    }
}