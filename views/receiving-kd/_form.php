<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceivingKd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receiving-kd-form">

  <div class="w3-container w3-blue">
    <center><h3>Form Receiving KD</h3></center>
  </div>

    <?php $form = ActiveForm::begin(); ?>

<div class="w3-input w3-animate-input">
  <div class="w3-quarter">
    <?= $form->field($model, 'case_no')->textarea(['maxlength' => true]) ?>
  </div>

  <div class="w3-quarter">
    <?= $form->field($model, 'location')->textarea(['maxlength' => true]) ?>
  </div>

    <?php
     $model->date = date('Y-m-d');
     $model->user = (Yii::$app->user->identity->username);
    ?>

  <div class="w3-quarter">
    <?= $form->field($model, 'date')->textarea(['readOnly' => true]) ?>
  </div>
  <div class="w3-quarter">
    <?= $form->field($model, 'user')->textarea(['readOnly' => true]) ?>
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
