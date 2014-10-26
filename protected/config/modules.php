<?php
$modules =  array(

	'admin' => array(
        'class' => 'application.modules.admin.AdminModule',
        'forceCopy' => YII_DEBUG ? true : false,
	),

);


//开启GII模块.
if(YII_DEBUG)
{
    $modules['gii'] = require(__DIR__ . DIRECTORY_SEPARATOR . 'gii.php');
}



return $modules;