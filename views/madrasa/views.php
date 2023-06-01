
<?php 

use kartik\detail\DetailView;
echo DetailView::widget([
    'model'=>$model,
    'condensed'=>true,
    'hover'=>true,
    'mode'=>DetailView::MODE_VIEW,
    'panel'=>[
        'heading'=>'Book # ' . $model->id,
        'type'=>DetailView::TYPE_INFO,
    ],
    'attributes'=>[
        'jumlah_peserta',
        'provinsi_madrasa',
        ['attribute'=>'publish_date', 'type'=>DetailView::INPUT_DATE],
    ]
]);