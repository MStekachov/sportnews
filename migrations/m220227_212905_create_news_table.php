<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m220227_212905_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'pic' => $this->string()->null(),
            'status' => $this->integer(1)->defaultValue(0),
            'created_dt' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_dt' => $this->dateTime()->null(),
            'published_dt' => $this->dateTime()->null(),
            'comments' => $this->text()->null()
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
