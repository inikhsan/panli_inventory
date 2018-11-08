<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CycleCount */

$this->title = 'Menu Cycle Count';
$this->params['breadcrumbs'][] = ['label' => 'Cycle Count', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cycle-count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
