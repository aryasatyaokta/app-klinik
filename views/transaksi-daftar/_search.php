<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiDaftarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-daftar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_transaksi_daftar') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'penyakit') ?>

    <?= $form->field($model, 'tgl_daftar') ?>

    <?= $form->field($model, 'tipe_bayar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
