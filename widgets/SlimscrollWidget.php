<?php
/**
 * @link https://github.com/rey-pro/yii2-addons
 * @copyright Copyright (c) 2016 rey-pro
 * @license https://github.com/rey-pro/yii2-addons/blob/master/LICENSE
 */
namespace rey\slimscroll;

use yii\helpers\Html;
use yii\helpers\Json;

class SlimscrollWidget extends \yii\base\Widget
{
	/**
	 * SlimScroll options
	 * @link http://rocha.la/jQuery-slimScroll 
	 * @var array()
	 */
	public $options;
	
	/**
	 * Tag Html attributes
	 * @var array()
	 */
	public $htmlOptions;
	
	/**
	 * Tag
	 * @var string
	 */
	public $tag='div';

	public function init()
	{
	    if (!isset($this->htmlOptions['id'])) {
	        $this->htmlOptions['id'] = $this->getId();
	    }
	    echo Html::beginTag($this->tag, $this->htmlOptions);
	}
	
	public function run()
	{
	    $view = $this->getView();
	    
	    SlimscrollAsset::register($view);
	    
	    $options = Json::encode($this->options);
	    
	    $view->registerJs("jQuery('#{$this->htmlOptions['id']}').slimScroll($options);");
	    
	    echo Html::endTag($this->tag);
	}
}