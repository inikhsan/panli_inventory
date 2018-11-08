<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Receiving */

$this->title = 'Receiving Menu';
$this->params['breadcrumbs'][] = ['label' => 'Receiving', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
