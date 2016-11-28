<?php
/**
 * @link https://github.com/rey-pro/yii2-addons
 * @copyright Copyright (c) 2016 rey-pro
 * @license https://github.com/rey-pro/yii2-addons/blob/master/LICENSE
 */
namespace rey\addons\assets;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    const SKIN_ALL = 'all';
    const SKIN_FLAT = 'flat/_all';
    const SKIN_FLAT_AERO = 'flat/aero';
    const SKIN_FLAT_BLUE = 'flat/blue';
    const SKIN_FLAT_FLAT = 'flat/flat';
    const SKIN_FLAT_GREEN = 'flat/green';
    const SKIN_FLAT_GREY = 'flat/grey';
    const SKIN_FLAT_ORANGE = 'flat/orange';
    const SKIN_FLAT_PINK = 'flat/pink';
    const SKIN_FLAT_PURPLE = 'flat/purple';
    const SKIN_FLAT_RED = 'flat/red';
    const SKIN_FLAT_YELLOW = 'flat/yellow';
    const SKIN_FUTURICO = 'futurico/futurico';
    const SKIN_LINE = 'line/_all';
    const SKIN_LINE_AERO = 'line/aero';
    const SKIN_LINE_BLUE = 'line/blue';
    const SKIN_LINE_GREEN = 'line/green';
    const SKIN_LINE_GREY = 'line/grey';
    const SKIN_LINE_LINE = 'line/line';
    const SKIN_LINE_ORANGE = 'line/orange';
    const SKIN_LINE_PINK = 'line/pink';
    const SKIN_LINE_PURPLE = 'line/purple';
    const SKIN_LINE_RED = 'line/red';
    const SKIN_LINE_YELLOW = 'line/yellow';
    const SKIN_MINIMAL = 'minimal/_all';
    const SKIN_MINIMAL_AERO = 'minimal/aero';
    const SKIN_MINIMAL_BLUE = 'minimal/blue';
    const SKIN_MINIMAL_GREEN = 'minimal/green';
    const SKIN_MINIMAL_GREY = 'minimal/grey';
    const SKIN_MINIMAL_LINE = 'minimal/minimal';
    const SKIN_MINIMAL_ORANGE = 'minimal/orange';
    const SKIN_MINIMAL_PINK = 'minimal/pink';
    const SKIN_MINIMAL_PURPLE = 'minimal/purple';
    const SKIN_MINIMAL_RED = 'minimal/red';
    const SKIN_MINIMAL_YELLOW = 'minimal/yellow';
    const SKIN_POLARIS = 'polaris/polaris';
    const SKIN_SQUARE = 'square/_all';
    const SKIN_SQUARE_AERO = 'square/aero';
    const SKIN_SQUARE_BLUE = 'square/blue';
    const SKIN_SQUARE_GREEN = 'square/green';
    const SKIN_SQUARE_GREY = 'square/grey';
    const SKIN_SQUARE_LINE = 'square/square';
    const SKIN_SQUARE_ORANGE = 'square/orange';
    const SKIN_SQUARE_PINK = 'square/pink';
    const SKIN_SQUARE_PURPLE = 'square/purple';
    const SKIN_SQUARE_RED = 'square/red';
    const SKIN_SQUARE_YELLOW = 'square/yellow';

    public static $skin = 'all';
    public $sourcePath = '@bower/icheck';

    public $baseUrl = '@web';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->css = [
            'skins/' . self::$skin . '.css',
        ];
        // detect is debug mode and select uncompressed js file
        $jsFile = YII_DEBUG ? 'icheck.js' : 'icheck.min.js';
        $this->js = [
            $jsFile,
        ];
    }

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $cssClassSuffix = str_replace('/', '-', self::$skin);
        $view->registerJs(
            '$("input").iCheck({
                checkboxClass: "icheckbox_' . $cssClassSuffix . '",
                radioClass: "iradio_' . $cssClassSuffix . '",
                increaseArea: "20%" // optional
            });'
        );
    }
}