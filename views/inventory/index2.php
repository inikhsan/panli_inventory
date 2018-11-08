<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>

  <?php echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="inventory-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                      //'id',
                      //'pdaid',
                      //'part_number',
                      'part_name',
                      'location',
                      'snp',
                      'qty',
                      //'out',
                      'remarks',
                      //'created_by',
                      //'updated_by',

            ['class' => 'yii\grid\ActionColumn',
                    'template' => '{view}'],
        ],

    ]); ?>

</div>
