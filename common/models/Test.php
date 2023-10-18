<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\rest\ActiveController;

class Test extends ActiveRecord
{
    public $modelClass = 'app\models\Test';

//    public function fields()
//    {
//        return[
//            'title'=>'title',
//            'value'=>'testValue'
//        ];
//    }

}