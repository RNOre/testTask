<?php

namespace frontend\controllers;

use common\models\Comment;
use common\models\User;
use common\models\Test;
use Yii;
use yii\rest\ActiveController;
use yii\web\Controller;

class TestController extends Controller
{
    public $modelClass = 'common\models\Comment';

    public function actionIndex()
    {
        return 'jdfs';
    }
    public function actionView($id)
    {
        $model = Comment::findOne($id);

        return $model;
    }
    public function actionCreate()
    {
        return 'df';
        $model = new Comment;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return 'true';
        } else {
            return 'false';
        }
//        return $this->request;
//        $comment = new Comment::class;

//        return 'create';
    }
    public function actionUpdate($id)
    {
//        return $id;
        $request = Yii::$app->request->getRawBody();
        return $request;
    }
}