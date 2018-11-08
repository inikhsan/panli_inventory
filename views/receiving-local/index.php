<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReceivingLocalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = ['label' => 'Summary Receiving Local', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-local-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <?= Html::a('Receiving Local', ['create'], ['class' => 'btn w3-btn w3-hover-blue w3-round-xxlarge']) ?>

      <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-download w3-round-xxlarge']) ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idreceiving_local',
            'part_number',
            'qty',
            // 'date',
            // 'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
