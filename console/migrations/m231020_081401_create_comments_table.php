<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m231020_081401_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'text'=>$this->text(),
            'date'=>$this->date(),
            'status'=>$this->boolean()->defaultValue(false),
            'userId'=>$this->integer()->notNull()
        ]);
        $this->addForeignKey(
            'fk-comments-user_id',
            'comments',
            'userId',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
