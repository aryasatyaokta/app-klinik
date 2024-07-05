<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tindakan_pasien') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'penyakit') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?= $form->field($model, 'obat_cocok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
