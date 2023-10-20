<?php

namespace common\models;

use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%comments}}';
    }

    public function rules()
    {
        return [
            [['text', 'date', 'userId', 'status'], 'required']
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'userId']);
    }
    public function fields()
    {
        return [
            'id',
            'text',
            'date',
            'status',
            'userId',
        ];
    }
    public function extraFields()
    {
        return [
            'user'
        ];
    }
}