<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TransaksiDaftar $model */

$this->title = $model->id_transaksi_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Daftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-daftar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_transaksi_daftar' => $model->id_transaksi_daftar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_transaksi_daftar' => $model->id_transaksi_daftar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_transaksi_daftar',
            'nama',
            'penyakit',
            'tgl_daftar',
            'tipe_bayar',
            'status',
        ],
    ]) ?>

</div>
