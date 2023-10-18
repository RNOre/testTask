<?php

namespace frontend\controllers;

use common\models\User;
use yii\db\ActiveRecord;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {

        return User::findOne(1);

        return $users;
    }
}