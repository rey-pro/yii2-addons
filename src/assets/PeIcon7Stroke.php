<?php
/**
 * Date: 24.11.2016 12:14
 * User: Rey
 */

namespace rey\addons\assets;

use \yii\web\AssetBundle;

class PeIcon7Stroke extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/rey-pro/dist/Icon-font-7-stroke-PIXEDEN-v-1-2-0/pe-icon-7-stroke';
    /**
     * @inherit
     */
    public $css = [
        'css/pe-icon-7-stroke.css',
        'css/helper.css',
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