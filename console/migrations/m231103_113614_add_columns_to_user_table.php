<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m231103_113614_add_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'firstname', $this->string());
        $this->addColumn('user', 'lastname', $this->string());
        $this->addColumn('user', 'patronymic', $this->string());
        $this->addColumn('user', 'phone', $this->string());
        $this->addColumn('user', 'dateOfBirth', $this->date());
        $this->addColumn('user', 'city', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'firstname');
        $this->dropColumn('user', 'lastname');
        $this->dropColumn('user', 'patronymic');
        $this->dropColumn('user', 'phone');
        $this->dropColumn('user', 'dateOfBirth');
        $this->dropColumn('user', 'city');
    }
}
