<?php

use app\models\TransaksiDaftar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiDaftarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Daftars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-daftar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Daftar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi_daftar',
            'nama',
            'penyakit',
            'tgl_daftar',
            'tipe_bayar',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TransaksiDaftar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi_daftar' => $model->id_transaksi_daftar]);
                 }
            ],
        ],
    ]); ?>


</div>
