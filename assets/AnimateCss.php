<?php
/**
 * Date: 24.11.2016 12:14
 * User: Rey
 */

namespace rey\addons;
use \yii\web\AssetBundle;

class AnimateCss extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/mrohnstock/animate.css';
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