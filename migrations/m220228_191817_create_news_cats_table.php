<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_cats}}`.
 */
class m220228_191817_create_news_cats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_cats}}', [
            'id' => $this->primaryKey(),
            'news_id' => $this->integer(),
            'cat_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_cats}}');
    }
}
