<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\News;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = News::find()->where(1);//(['status' => 1]);

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
/*            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                    'title' => SORT_ASC,
                ]
            ],*/
        ]);
        return $this->render('index', ['dataProvider' => $provider]);
    }

    public function actionView($id)
    {
        $query = News::find()->where(['id' => $id]);
        return $this->render('view', ['query' => $query]);
    }

    public function actionCreate()
    {

    }

}
