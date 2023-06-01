<?php 
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
?>
<?= Html::a('Mahasiswa Baru', ['mahasiswa/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama_madrasa',
            'jumlah_peserta',
            'provinsi_madrasa',
            ['class' => ActionColumn::className()]
        ]
    ])
?>
