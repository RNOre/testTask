<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m231020_112532_add_avatar_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'avatar', $this->string()->defaultValue('https://yt3.googleusercontent.com/k_LC5oQii8OpIXcQNvOtvWHN9CnBD5V9XdGDIouHuavMj8m-sEkwtMzvm8V8GC8InE5Uwdz6RK4=s900-c-k-c0x00ffffff-no-rj'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'avatar');
    }
}
