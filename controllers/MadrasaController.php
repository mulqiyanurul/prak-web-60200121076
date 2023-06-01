<?php

namespace app\controllers;
use app\models\madrasa;
use yii\data\ActiveDataProvider;

class MadrasaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = madrasa::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $madrasa = new madrasa;
    
        $madrasa->nama_madrasa = 'Ibtidayah';
        $madrasa->jumlah_peserta = 11;
        $madrasa->provinsi_madrasa = 'utara';

        if ($madrasa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($madrasa->getErrors());
            die();
    }
}

    public function actionUpdate($id)
    {
        $madrasa = madrasa::findOne($id);
        $madrasa->nama_madrasa = 'Aliyah';
        if ($madarsa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($madrasa->getErrors());
            die();
        
        }
}

    public function actionDelete($id)
    {
        $madrasa = madrasa::findOne($id);
        if ($madrasa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($madrasa->getErrors());
            die();
        }
    }
    public function actionView($id)
    {
        $madrasa = madrasa::findOne($id);
        $madrasa->nama_madrasa = 'Aliyah';
    }
}
