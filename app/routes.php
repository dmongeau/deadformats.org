<?php



return array(

	'/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'home'
		)
	),
	
	/*
	 *
	 * About
	 *
	 */
	 '/about/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'about'
		)
	),
	 '/about/:action.html' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'about'
		)
	),
	
	/*
	 *
	 * Medias
	 *
	 */
	'/medias' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias'
		)
	),
	'/medias.json' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias',
			'format' => 'json'
		)
	),
	'/medias/:country/:location/:lot/:id.html' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias',
			'action' => 'view'
		)
	),
	'/medias/:country/:location/:id.html' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias',
			'action' => 'view'
		)
	),
	'/medias/:lot/:id.html' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias',
			'action' => 'view'
		)
	),
	'/medias/:id.html' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'medias',
			'action' => 'view'
		)
	),
	
	
	
	/*
	 *
	 * Lots
	 *
	 */
	'/lots/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'lots'
		)
	),
	'/lots/*' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'lots',
			'action' => 'medias'
		)
	),
	
	/*
	 *
	 * Locations
	 *
	 */
	'/locations/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'locations'
		)
	),
	'/locations/*' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'locations',
			'action' => 'medias'
		)
	),
	
	
	/*
	 *
	 * Dates
	 *
	 */
	'/dates/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'dates'
		)
	),
	'/dates/*' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'dates',
			'action' => 'medias'
		)
	),
	
	/*
	 *
	 * Formats
	 *
	 */
	'/:format/' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'format',
			'action' => 'medias'
		)
	),
	
	/*
	 *
	 * Tiles
	 *
	 */
	'/tiles/:size/:zoom/:x/:y/*' => array(
		'page' => 'controller.php',
		'params' => array(
			'module' => 'tiles'
		)
	),
	
	
	
	
	'/:module' => array(
		'page' => 'controller.php'
	),
	'/:module/:action' => array(
		'page' => 'controller.php'
	),
	'/:module/:action/:subaction' => array(
		'page' => 'controller.php'
	)
);