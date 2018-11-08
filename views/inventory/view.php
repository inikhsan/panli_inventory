<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inventory', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(' Back', ['inventory/index'], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>
        <?= Html::a('More Detail', ['/inventory/view2', 'id' => $model->id], ['class' => 'btn w3-btn w3-hover-white']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'pdaid',
            'part_number',
            'location',
            'qty',
            'out',
            'remarks',
            //'date',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
