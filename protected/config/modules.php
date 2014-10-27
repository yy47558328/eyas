<?php
$modules =  array(

	'admin' => array(
        'class' => 'application.modules.admin.AdminModule'
	),

);


//开启GII模块.
if(YII_DEBUG)
{
    $modules['gii'] = require(__DIR__ . DIRECTORY_SEPARATOR . 'gii.php');
}



return $modules;