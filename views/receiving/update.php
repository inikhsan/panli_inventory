<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Receiving */

$this->title = 'Update Receiving: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receivings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receiving-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
