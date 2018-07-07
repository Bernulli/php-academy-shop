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
use mdm\admin\components\Helper;

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

    <title>Адмінка | <?= Html::encode($this->title) ?></title>
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
<!--                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--                    <div class="top-link">-->
<!--                        <ul class="link">-->
<!--                            --><?php ////if(!Yii::$app->user->isGuest): ?>
<!--                                <li><a href="--><?////= Url::to(['/site/logout']) ?><!--"><i class="fa fa-user"></i>-->
<!--                                        <p class="welcome-msg">--><?////= Yii::$app->user->identity['username'] ?><!-- (Вихід)</p>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            --><?php ////endif; ?>
<!--                            <li><a href="--><?////= Url::to(['/admin']) ?><!--"><i class="fa fa-unlock-alt"></i> Login</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <?php
                $menuItems = [
                    ['label' => 'На головну', 'url' => ['/category/index']],
                    ['label' => 'Rbac', 'url' => ['../rbac/default/index']],
                    ['label' => 'Login', 'url' => ['/user/login']],
                    [
                        'label' => 'Logout (' . \Yii::$app->user->identity->username . ')',
                        'url' => ['/user/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ],
                    ['label' => 'App', 'items' => [
                        ['label' => 'New Sales', 'url' => ['/sales/pos']],
                        ['label' => 'New Purchase', 'url' => ['/purchase/create']],
                        ['label' => 'GR', 'url' => ['/movement/create', 'type' => 'receive']],
                        ['label' => 'GI', 'url' => ['/movement/create', 'type' => 'issue']],
                    ]]
                ];

                $menuItems = Helper::filter($menuItems);

                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                ?>
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
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">Головна</a></li>
                                <li class="dropdown"><a href="#">Категорії<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['category/index']) ?>">Список категорій</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['category/create']) ?>">Додати категорію</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Товари<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['product/index']) ?>">Список товарів</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
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
                            <li><a href="index.html">Home</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- HEADER AREA END -->
<!-- Category slider area start -->
<div class="container">
    <?php if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php if(Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>
    <?= $content; ?>
</div>
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
                        <div class="payment">
                            <a href="#"><img src="/img/payment.png" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
