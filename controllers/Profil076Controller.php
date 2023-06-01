<?php

namespace app\controllers;
use app\models\Profil076;
use yii\data\ActiveDataProvider;

class Profil076Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = profil076::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

}
