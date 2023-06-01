<?php

namespace app\controllers;

use app\models\Nilai;
use yii\data\ActiveDataProvider;

class NilaiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Nilai::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

}
