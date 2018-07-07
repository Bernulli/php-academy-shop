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
            <div class="col-md-9 col-xs-12">
                <!-- START PRODUCT-AREA -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-3 gfont-1">Пошук по запиту: <?= Html::encode($q) ?></h3>
                                </div>
                            </div>

                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product -->
                            <div class="product">
                                <div class="tab-content">
                                    <!-- Start Product-->
                                    <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                                        <div class="row">
                                            <?php if(!empty($products)): ?>
                                                <?php foreach($products as $product): ?>
                                                    <!-- Start Single-Product -->
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            <a href="<?= Url::to(['product/view', 'id' => $product->id]) ?>">
                                                                <?php if($product->new == 1): ?>
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($product->sale == 1): ?>
                                                                    <div class="sale-off">
                                                                        <span class="sale-percent">-15%</span>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <div class="product-img">
                                                                    <?= Html::img("@web/img/product/mediam/{$product->img}", ['alt' => $product->name]) ?>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><?= $product->name ?></h5>
                                                                    <div class="price-box">
                                                                        <span class="price"><?= $product->price ?></span>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <a href="#" data-id="<?= $product->id; ?>" class="toch-button toch-add-cart add-to-cart cart">
                                                                            <i class="fa fa-shopping-cart">
                                                                                В корзину
                                                                            </i></a>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                <?php endforeach; ?>
                                            <?php else :?>
                                                <h2>Нічого не знайдено...</h2>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!empty($products)): ?>
                                            <!-- Start Pagination Area -->
                                            <div class="pagination-area">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <div class="pagination">
                                                            <?= LinkPager::widget([
                                                                'pagination' => $pages,
                                                            ]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Pagination Area -->
                                        <?php endif; ?>
                                    </div>
                                    <!-- End Product = TV -->
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
        </div>
    </div>
</section>
<!-- END PAGE-CONTENT -->