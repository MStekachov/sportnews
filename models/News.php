<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $pic
 * @property int|null $status
 * @property string|null $created_dt
 * @property string|null $updated_dt
 * @property string|null $published_dt
 * @property string|null $comments
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content'], 'required'],
            [['description', 'content', 'comments'], 'string'],
            [['status'], 'integer'],
            [['created_dt', 'updated_dt', 'published_dt'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Description',
            'content' => 'Содержание',
            'pic' => 'Изображение',
            'status' => 'Status',
            'created_dt' => 'Created Dt',
            'updated_dt' => 'Updated Dt',
            'published_dt' => 'Published Dt',
            'comments' => 'Comments',
        ];
    }
}
