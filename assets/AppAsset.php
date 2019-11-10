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
      'https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap',
      'https://fonts.googleapis.com/css?family=Acme&display=swap',
      'https://fonts.googleapis.com/css?family=Lobster&display=swap',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
      'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
      'css/normalise.css',
      'css/style.css',
    ];
    public $js = [
      'js/jquery.accordion.js',
      'js/jquery.cookie.js',
      'js/scale.js',
      'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
