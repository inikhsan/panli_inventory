<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PutawaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="putaway-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'part_case') ?>

    <?= $form->field($model, 'old_loc') ?>

    <?= $form->field($model, 'new_loc') ?>

    <?= $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
