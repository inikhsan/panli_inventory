<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Data */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Inventory', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('More Detail', ['/data/view2', 'id' => $model->id], ['class' => 'btn w3-btn w3-hover-white']) ?>
    <?= Html::a(' Back', ['index'], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
