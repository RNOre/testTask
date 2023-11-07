<?php

namespace frontend\models;

class Auth
{

    public function fields()
    {
        return[
            'user',
            'token'
        ];
    }
}