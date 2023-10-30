<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%access_token_and_refresh_token_to_user}}`.
 */
class m231027_074647_create_access_token_and_refresh_token_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'access_token', $this->string());
        $this->addColumn('{{%user}}', 'refresh_token', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'access_token');
        $this->dropColumn('{{%user}}', 'refresh_token');
    }
}
