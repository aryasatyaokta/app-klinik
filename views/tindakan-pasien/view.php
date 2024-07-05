<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */

$this->title = $model->id_tindakan_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakan-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_tindakan_pasien' => $model->id_tindakan_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_tindakan_pasien' => $model->id_tindakan_pasien], [
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
            'id_tindakan_pasien',
            'nama',
            'penyakit',
            'tindakan',
            'obat_cocok',
        ],
    ]) ?>

</div>
