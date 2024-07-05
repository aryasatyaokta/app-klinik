<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */

$this->title = 'Update Tindakan Pasien: ' . $model->id_tindakan_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tindakan_pasien, 'url' => ['view', 'id_tindakan_pasien' => $model->id_tindakan_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
