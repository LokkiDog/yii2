<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation"><a <?= Html::a('Главная','/web/') ?></a></li>
            <li role="presentation"><a <?= Html::a('Моя индекс',['my/index']) ?></a></li>
            <li role="presentation"><a <?= Html::a('Моя тестовая',['my/test']) ?></a></li>
        </ul>

        <?=  $content?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
