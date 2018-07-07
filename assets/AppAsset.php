<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
		'css/nivo-slider.css',
        'css/meanmenu.min.css',
        'css/jquery-ui.css',
        'css/animate.css',
        'css/main.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
//        'js/jquery-1.11.3.min.js',
//        'js/bootstrap.min.js',
        'js/wow.min.js',
        'js/jquery.meanmenu.js',
        'js/owl.carousel.min.js',
        'js/jquery.scrollUp.min.js',
        'js/countdon.min.js',
        'js/jquery-price-slider.js',
        'js/jquery.nivo.slider.js',
        'js/plugins.js',
//        'js/jquery.cookie.js',
        'js/jquery.accordion.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
