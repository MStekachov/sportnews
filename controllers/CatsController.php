<?php

namespace app\controllers;

use app\models\Cats;

class CatsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $catsList = Cats::find()->orderBy(['parent_id'=>SORT_ASC])->asArray(true)->all();
        return $this->render('index', ['cats' =>  $catsList]);
    }

}
