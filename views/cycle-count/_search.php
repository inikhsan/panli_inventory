<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CycleCountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cycle-count-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cycle_count') ?>

    <?= $form->field($model, 'part_case') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'qty') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
