<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset076 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'template/css/core.css',
        'template/css/componennts.css',
        'template/css/icon.css',
        'template/css/pages.css',
        'template/css/responsive.css',
    ];
    public $js = [
        'template/js/modernizr.min.js',
        'template/js/boostrap.min.js',
        'template/js/detect.js',
        'template/js/fastclick.js',
        'template/js/jquery.slimscrollmo.js',
        'template/js/jquery.blockUI.js',
        'template/js/waves.js',
        'template/js/wow.min.js',
        'template/js/jquery.necescroll.js',
        'template/js/jquery.scrollTo.min.js',
        'template/js/jquery.core.js',
        'template/js/jquery.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
