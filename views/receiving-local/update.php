<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReceivingLocal */

$this->title = 'Update Receiving Local: ' . $model->idreceiving_local;
$this->params['breadcrumbs'][] = ['label' => 'Receiving Locals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idreceiving_local, 'url' => ['view', 'id' => $model->idreceiving_local]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receiving-local-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
