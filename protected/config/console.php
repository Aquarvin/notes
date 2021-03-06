<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Notes',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=notes',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '0000',
			'charset' => 'utf8',
			'tablePrefix'=>'tb_',
		),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning,info',
					'categories'=>'system.*',
				),
			),
		),
	),
	'params'=>array(
		'spam'=>array(
			'Dear friend',
			'Free membership',
			'Click to remove',
			'spam'
		),
	),
);