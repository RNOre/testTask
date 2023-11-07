<?php

use yii\db\Migration;

/**
 * Class m231102_084540_change_type_access_token_column_to_text
 */
class m231102_084540_change_type_access_token_column_to_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'access_token', $this->string(350));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('user', 'access_token', $this->string());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231102_084540_change_type_access_token_column_to_text cannot be reverted.\n";

        return false;
    }
    */
}
