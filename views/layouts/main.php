<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="description" content="">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- HEADER-AREA START -->
<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul class="link">
                            <?php if(!Yii::$app->user->isGuest): ?>
                                <?php if(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())
                                ['admin']->name == 'admin' ||
                                    Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())
                                    ['manager']->name == 'manager') : ?>
                                <li><a href="<?= Url::to(['/admin']) ?>"><i class="fa fa-user"></i>
                                        Адмін панель
                                    </a>
                                </li>
                                <?php endif; ?>
                                <li><a href="<?= Url::to(['/site/logout']) ?>"><i class="fa fa-user"></i>
                                        <p class="welcome-msg"><?= Yii::$app->user->identity['username'] ?> (Вихід)</p>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li><a href="<?= Url::to(['/site/signup']) ?>"><i class="fa fa-unlock-alt"></i> Зареєструватись</a></li>
                                <li><a href="<?= Url::to(['/site/login']) ?>"><i class="fa fa-unlock-alt"></i> Вхід</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">

            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="<?= Url::home(); ?>" title="Malias">
                            <?= Html::img('@web/img/logo.png', ['alt' => 'Malias']) ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="header-search">
                                <form method="get" action="<?= Url::to(['category/search']) ?>">
                                    <input type="text" placeholder="Search" name="q">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="#" class="click-cart">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?= Url::home(); ?>">Головна</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li>
                                <a href="<?= Url::home(); ?>">Головна</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- HEADER AREA END -->
<?= $content; ?>
<!-- END HOME-PAGE-CONTENT -->
<!-- FOOTER-AREA START -->
<footer class="footer-area">
    <!-- Copyright-area Start -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; Взято с <a href="http://bayguzin.ru" target="_blank"> bayguzin.ru</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->

<?php

\yii\bootstrap\Modal::begin([
        'header' => '<h2>Корзина</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продовжити покупки</button>
        <a href="' . Url::to(['cart/view']) . '" class="btn btn-success">Оформити замовлення</a>
        <button type="button" class="btn btn-danger clear-cart">Очистити корзину</button>'

]);

\yii\bootstrap\Modal::end();
?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
