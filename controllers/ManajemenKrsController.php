<?php

namespace app\controllers;

class ManajemenKrsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHapusKrs()
    {
        return $this->render('hapus-krs');
    }
    public function actionDetailKrs($id)
    {
        return "<h1>mahasiswa / detail-krs ? id= 1". $id ."</h1";
    }
    


}
