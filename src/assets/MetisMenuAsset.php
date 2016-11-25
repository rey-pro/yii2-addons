<?php
/**
 * @link https://github.com/rey-pro/yii2-addons
 * @copyright Copyright (c) 2016 rey-pro
 * @license https://github.com/rey-pro/yii2-addons/blob/master/LICENSE
 */
namespace rey\addons\assets;
use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
    // The files are not web directory accessible, therefore we need
    // to specify the sourcePath property. Notice the @bower alias used.
    public $sourcePath = '@vendor/onokumus/metismenu/dist';

    /**
     * @inherit
     */
    public $js = [
        'metisMenu.min.js',
    ];

    /**
     * @inherit
     */
    public $css = [
        'metisMenu.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}