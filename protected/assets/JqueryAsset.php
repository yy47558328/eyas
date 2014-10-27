<?php
/**
 * jquery资源包
 */
Yii::import('assetbundle.components.EaAsset');
class JqueryAsset extends EaAsset
{

	public $sourcePath = 'bower.jquery';

    public $js = array(

        'jquery-1.11.1.min'
    );


    public $depends = array(

    );

}