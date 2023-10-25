<?php

use common\models\User;
use Faker\Factory;
use yii\db\Migration;

/**
 * Class m231020_081802_seed_comments_table
 */
class m231020_081802_seed_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeComments();
    }

    private function insertFakeComments()
    {
        $faker = Factory::create();

        for ($i = 0; $i <9; $i++) {
            $this->insert(
                'comments',
                [
                    'text' => $faker->text,
                    'date' => $faker->date,
                    'status' => 1,
                    'userId' => 1,
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('comments');

        return false;
    }
}
