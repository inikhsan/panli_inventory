<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'PT. PANLI',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
			'role' => 'navigation',
        ],
    ]);
    $menuItems = [
      $menuItems[] = ['label' => 'MR', 'url' => ['/site/login']],
      $menuItems[] = ['label' => 'WMS/Inventory', 'url' => ['/site/login']],
      $menuItems[] = ['label' => 'Master Data', 'url' => ['/site/login']],
      $menuItems[] = ['label' => 'Safety', 'url' => ['/site/login']],
    ];
    if (Yii::$app->user->isGuest) {

        // $menuItems[] = ['label' => 'Masuk', 'url' => ['/site/login']];
    } else {
        $menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],

    [
            'label' => 'Inventory',
            'items' => [
                ['label' => 'Cycle Count', 'url' => ['/cycle-count/create']],
                ['label' => 'Outbound', 'url' => ['/outbound/create']],
                ['label' => 'Putaway', 'url' => ['/putaway/create']],
                ['label' => 'Part Locator', 'url' => ['/site/locator']],
                ['label' => 'Receiving KD', 'url' => ['/receiving-kd/create']],
                ['label' => 'Receiving Local', 'url' => ['/receiving-local/create']],
            ],
     ],


    ];
        $menuItems[] = [
            'label' => 'Keluar (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; PANLI <?= date('Y') ?></p>

        <p class="pull-right">X-Play Nation</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
