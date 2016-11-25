<?php
/**
 * @link https://github.com/rey-pro/yii2-addons
 * @copyright Copyright (c) 2016 rey-pro
 * @license https://github.com/rey-pro/yii2-addons/blob/master/LICENSE
 */
namespace rey\addons;
use yii\web\AssetBundle;

class SlimscrollAsset extends AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/slimscroll';
	
	public $js=[
			'jquery.slimscroll.min.js',
	];
	
	public $depends = [
			'yii\web\JqueryAsset',
	];
}