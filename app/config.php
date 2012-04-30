<?php

$config = array(
	'path' => array(
		'pages' => PATH_PAGES,
		'plugins' => PATH_PLUGINS
	),
	
	'error' => array(
		'404' => PATH_PAGES.'/errors/404.html',
		'500' => PATH_PAGES.'/errors/500.html'
	),
	
	'debug' => array(
		'stats' => false
	),
	
	'db' => array(
		'adapter' => 'pdo_mysql',
		'config' => array(
			'host' => 'localhost',
			'username' => 'deadformats',
			'password' => 'YfGCNxSnzGx2hJHW',
			'dbname' => 'deadformats'
		)
	),
	
	'auth' => array(
		'table' => 'users',
		'identityColumn' => 'email',
		'passwordColumn' => 'pwd',
		'roleColumn' => 'role',
		'hashMode' => 'sha1',
		'hashSalt' => '!_GREGORY_!@',
		'block' => array(
			'deleted' => 1,
			'published' => 0
		),
		'valid' => array(
			'deleted' => 0,
			'published' => 1
		),
	
	),
	
	'mail' => array(
		'from' => array('Deadformats.org'=>'info@deadformats.org'),
		'contact' => 'dmp@ecoutez.ca'
	
	),
	
	'maps' => array(
		'tile' => array(
			'size' => 256,
			'padding' => 10
		),
		'maxZoom' => 4
	),
	
	
	'facebook' => array(
		'appId'  => '209594579080515',
		'secret' => 'a1416607f0a7b038455e1225f5aaf000',
		'cookie' => true,
	),
	
	'cache' => array(
		'cacheDir' => PATH_APP.'/_cache',
		'cache' => array(
			
			'core' => array(
				'frontend' => array(
					'name' => 'Core'
				),
				'backend' => array(
					'name' => 'File'
				)
			),
			
			'kate' => array(
				'frontend' => array(
					'name' => 'Core',
					'options' => array(
						'lifetime' => 7200,
						'automatic_serialization' => true
					)
				),
				'backend' => array(
					'name' => 'File'
				)
			),
			
			'data' => array(
				'frontend' => array(
					'name' => 'Core',
					'options' => array(
						'lifetime' => (3600*24*7),
						'automatic_serialization' => true
					)
				),
				'backend' => array(
					'name' => 'File'
				)
			)
		
		),
	),
	
	'resizer' => array(
		'path' => PATH_ROOT.'/statics/photos',
		'cache' => true,
		'cachePath' => PATH_ROOT.'/statics/photos/_cache',
		'size' => array(
			'thumb' => array(
				'width' => 50,
				'height' => 50,
				'ratio' => true
			),
			'list' => array(
				'width' => 250,
				'height' => 200
			),
			'large' => array(
				'width' => 2000,
				'height' => 1000
			)
		)
	)
	
);


return $config;