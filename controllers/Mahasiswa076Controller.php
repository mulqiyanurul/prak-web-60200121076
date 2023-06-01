<?php
namespace app\controllers;

use app\models\Mahasiswa076;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;


class Mahasiswa076Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa076::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa076 = new Mahasiswa076;
        $mahasiswa076->no_induk_mahasiswa = '60200121076-'.rand(10,99);
        $mahasiswa076->nama_mahasiswa = 'Nurul Mulqiya A Safi';
        $mahasiswa076->kelas = 'D';
        $mahasiswa076->status = 'Baru';
        if ($mahasiswa076->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa076 = mahasiswa076::findOne(['id' => $id]);
        if($mahasiswa076 !== null){
            $mahasiswa076->kelas = 'C';
            $mahasiswa076->status = 'Update';
            $mahasiswa076->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa076 = Mahasiswa076::findOne($id);
        if ($mahasiswa076->delete()) {
        return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa076->getError());
            die();
            }
        }
    
        public function actionView($id)
        {
            $mahasiswa076 = mahasiswa076::findOne($id);
            return $this->render('view', ['mahasiswa076' => $mahasiswa076]);
        }
    
}
