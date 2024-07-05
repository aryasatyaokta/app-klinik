<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TransaksiDaftar $model */

$this->title = 'Update Transaksi Daftar: ' . $model->id_transaksi_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Daftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi_daftar, 'url' => ['view', 'id_transaksi_daftar' => $model->id_transaksi_daftar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-daftar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
