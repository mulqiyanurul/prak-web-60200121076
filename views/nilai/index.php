<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>
    <p> 
        <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
    </p>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'no_ujian',
                'nilai_ipa',
                'nilai_ips',
                'nilai__agama',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',

        ],
    ],
])
?>