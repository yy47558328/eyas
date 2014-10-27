<?php
class EaAsset extends CApplicationComponent
{


    /**
     * published assets folder name
     * @var [type]
     */
	public $_assetsUrl;


    /**
     * 强制拷贝资源文件.
     * @var boolean
     */
	public $forceCopy = false;

    /**
     * 资源文件路径.
     * @var [type]
     */
	public $sourcePath = null;

    /**
     * js文件名数组.
     * @var array
     */
	public $js = array();

    /**
     * css文件名数组.
     * @var array
     */
	public $css = array();

    /**
     * 依赖资源类数组
     * @var array
     */
	public $depends = array();


	public function registerFiles()
	{

		$manager = Yii::app()->getClientScript();

		foreach($this->js as $url)
		{
            $manager->registerScriptFile($this->getAssetsUrl() . DIRECTORY_SEPARATOR . $url);  
		}


		foreach ($this->css as $url) 
		{
			$manager->registerCssFile($this->getAssetsUrl() . DIRECTORY_SEPARATOR . $url);
		}
		
	}



	/**
	* Returns the URL to the published assets folder.
	* @return string the URL
	*/
	protected function getAssetsUrl()
	{
		if (isset($this->_assetsUrl))
			return $this->_assetsUrl;
		else
		{
			$assetsPath = Yii::getPathOfAlias($this->sourcePath);
			$assetsUrl = Yii::app()->assetManager->publish($assetsPath, true, -1, $this->forceCopy);
			return $this->_assetsUrl = $assetsUrl;
		}
	}

	
}