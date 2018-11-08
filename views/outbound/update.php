<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Outbound */

$this->title = 'Update Outbound: ' . $model->id_outbound;
$this->params['breadcrumbs'][] = ['label' => 'Outbounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_outbound, 'url' => ['view', 'id' => $model->id_outbound]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="outbound-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
