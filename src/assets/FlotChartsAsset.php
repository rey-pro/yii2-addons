<?php
/**
 * @link https://github.com/rey-pro/yii2-addons
 * @copyright Copyright (c) 2016 rey-pro
 * @license https://github.com/rey-pro/yii2-addons/blob/master/LICENSE
 */
namespace rey\addons\assets;

use yii\web\AssetBundle;
use yii\helpers\ArrayHelper;
use yii\base\View;

class FlotChartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/flot';

    const PLUGIN_COLORHELPERS = 'jquery.colorhelpers.js';
    const PLUGIN_CANVAS = 'jquery.flot.canvas.js';
    const PLUGIN_CATEGORIES = 'jquery.flot.categories.js';
    const PLUGIN_CROSSHAIR = 'jquery.flot.crosshair.js';
    const PLUGIN_ERRORBARS = 'jquery.flot.errorbars.js';
    const PLUGIN_FILLBETWEEN = 'jquery.flot.fillbetween.js';
    const PLUGIN_IMAGE = 'jquery.flot.image.js';
    const PLUGIN_NAVIGATE = 'jquery.flot.navigate.js';
    const PLUGIN_PIE = 'jquery.flot.pie.js';
    const PLUGIN_RESIZE = 'jquery.flot.resize.js';
    const PLUGIN_SELECTION = 'jquery.flot.selection.js';
    const PLUGIN_STACK = 'jquery.flot.stack.js';
    const PLUGIN_SYMBOL = 'jquery.flot.symbol.js';
    const PLUGIN_THRESHOLD = 'jquery.flot.threshold.js';
    const PLUGIN_TIME = 'jquery.flot.time.js';

    private static $_plugins = [];
    /**
     * @inherit
     */
    public $js = [];


    public $depends = [
        'yii\web\JqueryAsset'
    ];

    /**
     * Initializes the bundle.
     * If you override this method, make sure you call the parent implementation in the last.
     */
    public function init()
    {
        parent::init();
        $this->js = self::$_plugins;
        array_unshift($this->js, 'jquery.flot.js');
    }


    /**
     * Registers this asset bundle with a view.
     * @param View $view the view to be registered with
     * @param array $plugins
     * @return static the registered asset bundle instance
     */
    public static function register($view, $plugins = [])
    {
        if (!empty($plugins)) {
            self::$_plugins = array_unique(ArrayHelper::merge(self::$_plugins, $plugins));
        }
        return $view->registerAssetBundle(get_called_class());
    }
}