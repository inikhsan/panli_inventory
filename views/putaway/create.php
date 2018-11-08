<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Putaway */

$this->title = 'Menu Putaway';
$this->params['breadcrumbs'][] = ['label' => 'Putaway', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="putaway-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
