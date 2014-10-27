<?php

$main =  array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	'defaultController' => 'default',

	// preloading 'log' component
	'preload'=>array('log'),
     
     //alias name
    'aliases' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'aliases.php'),

	'import'=> require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'imports.php'),

	'modules'=> require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'modules.php'),

	// application components
	'components'=>array(

		'urlManager' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'url.php'),
		
		'db'=> require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database.php'),

        'assetBundle' => array(
            'class' => 'assetbundle.components.EaAssetBundle'
        ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	'params'=> require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php'),
);



return $main;