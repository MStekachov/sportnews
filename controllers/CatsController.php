<?php

namespace app\controllers;

use app\models\Cats;
use yii\data\ActiveDataProvider;
use Yii;
use yii\web\Request;

class CatsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Cats::find()->all();

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);
        return $this->render('index', ['dataProvider' => $provider]);
    }

    public function actionView($id)
    {
        $model = Cats::findOne($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new Cats();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись  успешно создана');
            return $this->redirect(['cats/index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Cats::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Запись  успешно изменена');
            return $this->redirect(['cats/index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Cats::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Запись  успешно удалена');
        return $this->redirect(['cats/index']);
    }

}
