<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReceivingKdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Receiving Kd';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-kd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <!-- <?= Html::a('+', ['create'], ['class' => ' btn w3-btn w3-hover-aqua']) ?> -->

      <?= Html::a('Receiving KD', ['create'], ['class' => 'btn w3-btn w3-hover-blue w3-round-xxlarge']) ?>

      <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-download w3-round-xxlarge']) ?>

      <!-- <?= Html::a('', ['import'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-upload']) ?> -->
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'case_no',
            'location',
            // 'date',
            // 'user',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],

        ],
    ]); ?>
  </div>
</div>
