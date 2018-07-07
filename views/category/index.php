<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


?>

<div class="category-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- CATEGORY-MENU-LIST START -->
                <div class="left-category-menu hidden-sm hidden-xs">
                    <div class="left-product-cat">
                        <div class="category-heading">
                            <h2>Категорії</h2>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END CATEGORY-MENU-LIST -->
            </div>
            <div class="col-md-9 col-sm-9">
                <!-- START PRODUCT-AREA (1) -->
                <?php if(!empty($newCamera)): ?>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Фотоапарати</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
//                        $mainImg = $item->getImage();
//                        $gallery = $item->getImages();
                        ?>
                        <!-- End Product-Menu -->
                        <div class="clear"></div>
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Product = display-1-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <?php foreach($newCamera as $cam): ?>
                                                    <?php $mainImg = $cam->getImage() ?>
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <a href="<?= Url::to(['product/view', 'id' => $cam->id]) ?>" class="">
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                    <div class="product-img">
                                                                        <?= Html::img($mainImg->getUrl(), ['alt' => $cam->name]) ?>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><?= $cam->name ?></h5>
                                                                        <div class="price-box">
                                                                            <span class="price"><?= $cam->price ?></span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="container">
                                                                    <div class="product-button">
                                                                        <a href="<?= Url::to(['cart/add', 'id' => $cam->id]) ?>" data-id="<?= $cam->id ?>" class="add-to-cart">
                                                                            <i class="fa fa-shopping-cart"></i> В корзину</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                <?php endif; ?>
                <!-- END PRODUCT-AREA (1) -->
                <!-- START PRODUCT-AREA (2) -->
                <?php if(!empty($newComputer)): ?>
                    <div class="product-area">
                        <!-- Start Product-Menu -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product-menu  border-red">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Ноутбуки та комп'ютери</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Start Product = display-2-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <?php foreach($newComputer as $comp): ?>
                                                        <?php $mainImg = $comp->getImage() ?>
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <a href="<?= Url::to(['product/view', 'id' => $comp->id]) ?>">
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                    <div class="product-img">
                                                                        <?= Html::img($mainImg->getUrl(), ['alt' => $comp->name]) ?>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><?= $comp->name ?></h5>
                                                                        <div class="price-box">
                                                                            <span class="price"><?= $comp->price ?></span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="container">
                                                                    <div class="product-button">
                                                                        <a href="<?= Url::to(['cart/add', 'id' => $comp->id]) ?>" data-id="<?= $comp->id ?>" class="add-to-cart">
                                                                            <i class="fa fa-shopping-cart"></i> В корзину</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-2-1 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                <?php endif; ?>
                <!-- END PRODUCT-AREA (2) -->
                <!-- START PRODUCT-AREA (3) -->
                <?php if(!empty($newSmartphone)): ?>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Смартфони</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Start Product = display-3-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <?php foreach($newSmartphone as $sphone): ?>
                                                        <?php $mainImg = $sphone->getImage() ?>
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <a href="<?= Url::to(['product/view', 'id' => $sphone->id]) ?>">
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                    <div class="product-img">
                                                                        <?= Html::img($mainImg->getUrl(), ['alt' => $sphone->name]) ?>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><?= $sphone->name ?></h5>
                                                                        <div class="price-box">
                                                                            <span class="price"><?= $sphone->price ?></span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="container">
                                                                    <div class="product-button">
                                                                        <a href="<?= Url::to(['cart/add', 'id' => $sphone->id]) ?>" data-id="<?= $sphone->id ?>" class="add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- END PRODUCT-AREA (3) -->
                <!-- START PRODUCT-AREA (4) -->
                <?php if(!empty($newTV_audio)): ?>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Телевізори</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Start Product = display-3-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <?php foreach($newTV_audio as $tv): ?>
                                                        <?php $mainImg = $tv->getImage() ?>
                                                        <!-- Start Single-Product -->
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                <a href="<?= Url::to(['product/view', 'id' => $tv->id]) ?>">
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                    <div class="product-img">
                                                                        <?= Html::img($mainImg->getUrl(), ['alt' => $tv->name]) ?>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><?= $tv->name ?></h5>
                                                                        <div class="price-box">
                                                                            <span class="price"><?= $tv->price ?></span>
                                                                        </div>

                                                                    </div>
                                                                </a>
                                                                <div class="container">
                                                                    <div class="product-button">
                                                                        <a href="<?= Url::to(['cart/add', 'id' => $tv->id]) ?>" data-id="<?= $tv->id ?>" class="btn btn-default add-to-cart">
                                                                            <i class="fa fa-shopping-cart"></i> В корзину</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- END PRODUCT-AREA (4) -->
            </div>
        </div>
    </div>
</div>
<!-- Category slider area End -->
<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
            </div>
        </div>
    </div>
</section>