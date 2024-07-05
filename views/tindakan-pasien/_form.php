<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_cocok')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
