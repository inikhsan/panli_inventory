<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReceivingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Receiving KD';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('+', ['create'], ['class' => ' btn w3-btn w3-hover-aqua']) ?> -->

        <?= Html::a('Receiving KD', ['create'], ['class' => 'btn w3-btn w3-hover-blue']) ?>

        <?= Html::a('', ['export'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-download']) ?>

        <!-- <?= Html::a('', ['import'], ['class' => 'btn w3-btn w3-hover-green glyphicon glyphicon-upload']) ?> -->

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'pdaid',
            'location',
            // 'date',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
        ],
    ]); ?>
</div>
