<?php

namespace app\controllers;
use app\models\matakuliah;
use yii\data\ActiveDataProvider;


class MataKuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = matakuliah::find();
        $dataProvider = new ActiveDataProvider([
            'query'=> $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);

    }

}
