<?php 
/**
 * For the developement site the errors to true
 *
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

/**
 * Init the models 
 *
 */
require_once __DIR__ . "/models/init.php";

/** 
 *  Parse the URLs
 *
 */
require_once __DIR__ . "/routes/routes.php";

/**
 * Get the controller
 * TODO: 	This is hackable parse the routes
 *  
 */
if (file_exists(__DIR__ . "/controllers/" . $routes->controller . ".php")) {
	require_once (__DIR__ . "/controllers/" . $routes->controller . ".php");
} else {

	// Redirect to 404
	define("error", "Cette page n'existe plus, le serveur nous dit pardon.");	
	
	$error = Errors::create(array(
			'level'	=> '1', 
			'title'	=> 'Someone found missing controller',
			'info'	=> "Controller :" . $routes->controller ." view :" . $routes->view 
	));

	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	header("Status: 404 Not Found");
	$_SERVER['REDIRECT_STATUS'] = 404;
}

/**
 * Get the master view 
 * 	
 */
require_once __DIR__ . "/views/master.php";
?>
