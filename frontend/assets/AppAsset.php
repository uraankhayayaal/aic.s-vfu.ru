<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css\vzw_fonts.css',
        'css\clientlibs.css',
    ];
    public $js = [
        //'js\jquery.js',
        'js/clientlibs.js',
        'http://vk.com/js/api/share.js?90',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
);
}
