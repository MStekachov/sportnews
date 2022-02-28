<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cats}}`.
 */
class m220228_184236_create_cats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cats}}', [
            'id' => $this->primaryKey(),
            'cat_name' => $this->string(31)->notNull()->unique(),
            'parent_id' => $this->integer(2),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cats}}');
    }
}
