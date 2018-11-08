<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\data */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inventory', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventory-view2">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
          <?= Html::a(' Back', ['/inventory/index', 'id'  => $model->id], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //'id',
          'pdaid',
          'part_number',
          'part_name',
          'location',
          'snp',
          'qty',
          'out',
          'remarks',
          'date',
          'created_by',
          'updated_by',
      ],
    ]) ?>

</div>
