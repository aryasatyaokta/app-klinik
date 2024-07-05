<?php

use app\models\Useres;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UseresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Useres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Useres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_useres',
            'nama',
            'username',
            'password',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Useres $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_useres' => $model->id_useres]);
                 }
            ],
        ],
    ]); ?>


</div>
