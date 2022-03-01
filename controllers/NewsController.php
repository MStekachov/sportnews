<?php

namespace app\controllers;

use yii\data\ActiveDataProvider;
use app\models\News;
use Yii;
use yii\web\Request;

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
        /*$request = \Yii::$app->request;
        $id = $request->get('id');
        $query = News::find()->where(['id' => $id]);

        $provider = new ActiveDataProvider([
            'query' => $query,
        ]);*/
        $model = News::findOne($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new News();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись  успешно создана');
            return $this->redirect(['news/index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = News::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись  успешно изменена');
            return $this->redirect(['news/index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = News::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Запись  успешно удалена');
        return $this->redirect(['news/index']);
    }

}
