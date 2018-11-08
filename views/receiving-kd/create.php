<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReceivingKd */

$this->title = 'Menu Receiving Kd';
$this->params['breadcrumbs'][] = ['label' => 'Receiving Kd', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-kd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
