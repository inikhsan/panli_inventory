<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReceivingKd */

$this->title = 'Update Receiving Kd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receiving Kds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receiving-kd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
