<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receiving */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receiving-form">


            <h4>
                <!-- <?= $this->title ?> -->
                <span class="pull-right">
                    <?= Html::a('Summary', ['index'], ['class' => 'btn w3-btn w3-hover-red']) ?>
                </span>
            </h4>

<br>
  <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <?= $form->field($model, 'pdaid')->textarea(['maxlength' => true]) ?>

        <?= $form->field($model, 'location')->textarea(['maxlength' => true]) ?>

       <?php
        $model->date = date('Y-m-d');
        $model->created_by = (Yii::$app->user->identity->username);
      ?>
        <?= $form->field($model, 'date')->textInput(['readOnly'=>true]) ?>
        <?= $form->field($model, 'created_by')->textInput(['readOnly' => true]) ?>
<br>
<center>
  <span class="pull-center">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn w3-btn w3-green w3-xlarge' : 'btn btn-primary']) ?>
  </span>
</center>

    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
