<?php
/**
 * Date: 31.03.2017 13:59
 * User: Rey
 */

namespace rey\addons\assets;

use yii\web\AssetBundle;

class SweetAlertAsset extends AssetBundle
{
    public $sourcePath = '@bower/sweetalert/dist';

    public $css = [
        'sweetalert.css'
    ];

    public $js = [
        'sweetalert.min.js'
    ];
}