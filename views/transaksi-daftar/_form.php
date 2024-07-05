<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiDaftar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-daftar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_daftar')->textInput() ?>

    <?= $form->field($model, 'tipe_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
