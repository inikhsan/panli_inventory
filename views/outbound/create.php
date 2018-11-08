<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Outbound */

$this->title = 'Menu Outbound';
$this->params['breadcrumbs'][] = ['label' => 'Outbound', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbound-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
