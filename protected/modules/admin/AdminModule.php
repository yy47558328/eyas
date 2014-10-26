<?php

class AdminModule extends CWebModule
{



	private $_assetsUrl;

	public  $forceCopy = false;

    /**
     * 注册CSS及javascript文件.
     * @return [type] [description]
     */
	public function register()
	{
		$this->registerCSS();
		$this->registerScript();
		$this->registerCssTheme();
	}


    /**
     * 注册CSS文件.
     * @return [type] [description]
     */
	private function registerCSS()
	{
		Yii::app()->clientScript->registerCssFile($this->getAssetsUrl().'/css/eyas.min.css');
	}


	private function registerCssTheme()
	{
		Yii::app()->clientScript->registerCssFile($this->getAssetsUrl().'/css/theme-blue.min.css');
	}


	private function registerMeta()
    {

    }


    private function registerScript()
    {
    	Yii::app()->clientScript->registerScriptFile($this->getAssetsUrl().'/js/eyas.min.css');
    }


    public function getAssetsUrl()
    {
    	if (isset($this->_assetsUrl))
			return $this->_assetsUrl;
		else
		{
			$assetsPath = Yii::getPathOfAlias('backend.assets');
			$assetsUrl = Yii::app()->assetManager->publish($assetsPath, true, -1, $this->forceCopy);
			return $this->_assetsUrl = $assetsUrl;
		}
    }



	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
