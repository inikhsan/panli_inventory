<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CycleCountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cycle Count';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cycle-count-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <p>
    <?= Html::a('Cycle Count', ['create'], ['class' => 'btn w3-btn w3-hover-blue w3-round-xxlarge']) ?>

    <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-download w3-round-xxlarge']) ?>

  </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_cycle_count',
            'part_case',
            'location',
            'qty',
            // 'date',
            // 'user',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
        ],
    ]); ?>
</div>
