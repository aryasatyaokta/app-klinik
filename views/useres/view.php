<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Useres $model */

$this->title = $model->id_useres;
$this->params['breadcrumbs'][] = ['label' => 'Useres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="useres-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_useres' => $model->id_useres], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_useres' => $model->id_useres], [
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
            'id_useres',
            'nama',
            'username',
            'password',
        ],
    ]) ?>

</div>
