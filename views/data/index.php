<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-print'], ['class' => '']) ?>
      </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'pdaid',
            'part_number',
            'location',
            'qty',
            //'out',
            'remarks',
            //'date',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\Action'],
        ],
    ]); ?>
</div>
