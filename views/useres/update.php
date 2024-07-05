<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Useres $model */

$this->title = 'Update Useres: ' . $model->id_useres;
$this->params['breadcrumbs'][] = ['label' => 'Useres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_useres, 'url' => ['view', 'id_useres' => $model->id_useres]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="useres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
