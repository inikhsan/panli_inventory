<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">
  <div class="panel panel-info">
        <div class="panel-heading">
            <h4>
                <?= $this->title ?>
                <span class="pull-right">
                    <?= Html::a(' Kembali', ['index'], ['class' => 'btn w3-btn w3-hover-red glyphicon glyphicon-log-in']) ?>
                </span>
            </h4>
        </div>

    <div class="panel-body">

      <?php $form = ActiveForm::begin(); ?>

      <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'pdaid')->textInput(['maxlength' => true]) ?>
        </div>

      <div class="col-md-6">
          <?= $form->field($model, 'part_number')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
          <?= $form->field($model, 'part_name')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
          <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
          <?= $form->field($model, 'snp')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
          <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
         <?= $form->field($model, 'out')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
         <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>
      </div>

      <div class="col-md-6">
         <?php
          $model->date = date('Y-m-d');
          $model->updated_by = (Yii::$app->user->identity->username);
        ?>
          <?= $form->field($model, 'date')->textInput(['readOnly'=>true]) ?>
          <?= $form->field($model, 'updated_by')->textInput(['readOnly' => true]) ?>
      </div>
    </div>

  <div class="col-md-3">
    <span class="pull-right">
      <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn w6-btn w6-hover-green' : 'btn btn-primary']) ?>
    </span>
  </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
