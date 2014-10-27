<?php
Yii::import('assetbundle.components.EaAsset');
class BackendAsset extends EaAsset
{

	public $sourcePath = 'backend.assets';

    public $css = array(
        
        'css/eyas.min.css',
        'css/theme-blue.min.css'

    );


    public $js = array(

    	'js/eyas.min.js',

           
    );


    public $depends = array
    (
         'asset.JqueryAsset'
    );

}