<?php

namespace commands;

use common\models\User;
use Faker\Factory;
use yii\console\Controller;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $faker = Factory::create();

        $user = new User();

        $user->username = $faker->userName;
        $user->auth_key=$faker->randomKey;
        $user->password_hash=$faker->randomKey;
        $user->email=$faker->email;
        $user->status=$faker->boolean;
        $user->created_at=$faker->date;
        $user->updated_at=$faker->date;
        $user->name=$faker->name;
        $user->surname=$faker->name;
        $user->patronymic=$faker->name;
        $user->date_of_birth=$faker->date;
        $user->city=$faker->city;
        $user->save();
    }
}