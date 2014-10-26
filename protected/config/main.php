<?php

$main =  array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	'defaultController' => 'default',

	// preloading 'log' component
	'preload'=>array('log'),


	'import'=> require(__DIR__ . DIRECTORY_SEPARATOR . 'imports.php'),

	'modules'=> require(__DIR__ . DIRECTORY_SEPARATOR . 'modules.php'),

	// application components
	'components'=>array(

		'urlManager' => require(__DIR__ . DIRECTORY_SEPARATOR . 'url.php'),
		
		'db'=> require(__DIR__ . DIRECTORY_SEPARATOR . 'database.php'),

		
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

	'params'=> require(__DIR__ . DIRECTORY_SEPARATOR . 'params.php'),
);



return $main;