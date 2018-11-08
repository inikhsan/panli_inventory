<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Putaway */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="putaway-form">

  <div class="w3-container w3-blue">
    <center><h3>Form Putaway</h3></center>
  </div>

    <?php $form = ActiveForm::begin(); ?>

<div class="w3-input w3-animate-input">
  <div class="w3-quarter">
    <?= $form->field($model, 'part_case')->textarea(['maxlength' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'old_loc')->textarea(['maxlength' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'new_loc')->textarea(['maxlength' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'qty')->textarea(['maxlength' => true]) ?>
  </div>

  <?php
   $model->date = date('Y-m-d');
   $model->user = (Yii::$app->user->identity->username);
  ?>

  <div class="w3-half">
    <?= $form->field($model, 'date')->textInput(['readOnly' => true]) ?>
  </div>

  <div class="w3-half">
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
