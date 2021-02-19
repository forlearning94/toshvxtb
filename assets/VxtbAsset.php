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
class VxtbAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "vxtb/css/owl.carousel.min.css",
        "vxtb/css/owl.theme.default.min.css",
        "vxtb/css/bootstrap.min.css",
        "vxtb/css/style.css",
        "vxtb/css/style.css.map",
        "vxtb/css/style.min.css",
        "vxtb/css/style.scss"
    ];
    public $js = [
        "vxtb/js/jquery.js",
        "vxtb/js/owl.carousel.min.js",
        "vxtb/js/bootstrap.min.js",
        "vxtb/js/main.js"
    ];
    public $depends = [
        
    ];
}
