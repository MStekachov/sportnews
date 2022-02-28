<?php

namespace app\controllers;

class CatsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
