<?php
/**
 * 资源管理类
 */
class EaAssetBundle extends CApplicationComponent
{

    /**
     * 记录已载入的资源类.
     * @var array
     */
	public $bundles = array();

	public function register($alias)
	{
        //检测类是否存在.
        if(!class_exists($class = Yii::import($alias)))return false;

         //检测类是否重复载入.
         if(in_array($class, $this->bundles))return false;
            
            $this->bundles[] = $class;
            $asset = new $class;

            foreach($asset->depends as $depend)
	        {
	            $this->register($depend);
	        }
    	    
    	    $asset->registerFiles();
	}
}