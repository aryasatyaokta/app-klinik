<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Useres $model */

$this->title = 'Create Useres';
$this->params['breadcrumbs'][] = ['label' => 'Useres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
