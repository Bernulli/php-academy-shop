<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;


?>

<!-- START PAGE-CONTENT -->
<section class="page-content">
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
            <?php
            $mainImg = $product->getImage();
            $gallery = $product->getImages();
            ?>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <!-- Start Toch-Prond-Area -->
                <div class="toch-prond-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="clear"></div>
                            <div class="tab-content">
                                <!-- Product = display-1-1 -->
                                <div role="tabpanel" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <?= Html::img($mainImg->getUrl(), ['alt' => $product->name]); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-1 -->
                            </div>
                            <!-- Start Toch-prond-Menu -->
                            <div class="toch-prond-menu">
                                <ul role="tablist">
                                    <?php $i = 0; foreach($gallery as $img): ?>
                                        <?php if($img->getUrl() == $mainImg->getUrl()): ?>
                                            <?php continue ?>
                                        <?php else: ?>
                                            <li role="presentation">
                                                <?= Html::img($img->getUrl(), ['alt' => $product->name]); ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <!-- End Toch-prond-Menu -->
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <h2 class="title-product"><?= $product->name; ?></h2>
                            <div class="about-toch-prond">
                                <hr />
                                <p class="short-description"><?= $product->content; ?></p>
                                <hr />
                                <span class="current-price"><?= $product->price; ?></span>
                            </div>
                            <div class="product-quantity">
                                <span>Кількість</span>
                                <input type="text" value="1" id="qty" />
                                <a href="<?= Url::to(['cart/add', 'id' => $product->id]) ?>" data-id="<?= $product->id; ?>" class="toch-button toch-add-cart add-to-cart cart">
                                    <i class="fa fa-shopping-cart">
                                        В корзину
                                    </i></a>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <!-- START PRODUCT-AREA -->
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Рекомендовані товари</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <div class="clear"></div>
                        <!-- Start Product -->
                        <div class="product carosel-navigation">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <?php foreach($rec_items as $item): ?>
                                    <?php $mainImg = $item->getImage() ?>
                                        <!-- Start Single-Product -->
                                        <div class="col-xs-12">
                                            <div class="single-product">
                                                <a href="<?= Url::to(['product/view', 'id' => $item->id]) ?>">
                                                    <div class="product-img">
                                                        <?= Html::img($mainImg->getUrl(), ['alt' => $item->name]) ?>
                                                    </div>
                                                    <div class="product-description">
                                                        <h5><?= $item->name ?></h5>
                                                        <div class="price-box">
                                                            <span class="price"><?= $item->price ?></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                        <!-- End Product -->
                    </div>
                    <!-- END PRODUCT-AREA -->
                </div>
                <!-- End Toch-Prond-Area -->
            </div>
        </div>
    </div>
</section>
<!-- END PAGE-CONTENT -->