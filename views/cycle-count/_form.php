<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CycleCount */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cycle-count-form">

  <div class="w3-container w3-blue">
    <center><h3>Form Cycle Count</h3></center>
  </div>

    <?php $form = ActiveForm::begin(); ?>

<div class="w3-input w3-animate-input">

    <?= $form->field($model, 'part_case')->textarea(['maxlength' => true]) ?>

  <div class="w3-quarter">
    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>
  </div>

  <?php
   $model->date = date('Y-m-d');
   $model->user = (Yii::$app->user->identity->username);
  ?>

  <div class="w3-quarter">
    <?= $form->field($model, 'date')->textInput(['readOnly' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'user')->textInput(['readOnly' => true]) ?>
  </div>

  <center>
    <span class="pull-center">
          <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'w3-btn w3-blue' : 'btn btn-primary']) ?>
          <?= Html::a('Summary', ['index'], ['class' => 'w3-btn w3-hover-red']) ?>
   </span>
  </center>

</div>

  <?php ActiveForm::end(); ?>

</div>
