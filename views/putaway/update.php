<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Putaway */

$this->title = 'Update Putaway: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Putaways', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="putaway-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
