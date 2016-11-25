<?php
/**
 * Date: 24.11.2016 12:14
 * User: Rey
 */

namespace rey\addons\assets;

use \yii\web\AssetBundle;

class AnimateCssAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/drmonty/animate.css';
    /**
     * @inherit
     */
    public $css = [
    'css/animate.min.css',
];
    /**
     * Initializes the bundle.
     * Set publish options to copy only necessary files (in this case css and font folders)
     * @codeCoverageIgnore
     */
    public function init()
{
    parent::init();
    $this->publishOptions['beforeCopy'] = function ($from, $to) {
        return preg_match('%(/|\\\\)(fonts|css)%', $from);
    };
}
}