<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property int $id
 * @property string $cat_name
 * @property int|null $parent_id
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['parent_id'], 'integer'],
            [['cat_name'], 'string', 'max' => 31],
            [['cat_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Название категории',
            'parent_id' => 'Parent ID',
        ];
    }
}
