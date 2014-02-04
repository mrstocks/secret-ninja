<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'Off');

/**
 * Require my stupid config
 * If someone wants to fix me. please do
 */
require_once __DIR__ . "/config/config.php";

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
 * Get the helper
 *
 */
require_once __DIR__ . "/helpers/helper.php";

/**
 * Get the controller
 * TODO: 	This is hackable parse the routes
 *  
 */
if (file_exists(__DIR__ . "/controllers/" . $routes->controller . ".php")) {
	require_once (__DIR__ . "/controllers/" . $routes->controller . ".php");
} else {
	$info = array (
		"Someone found a 404, missing a controller", 
		"Controller :" . $routes->controller ." view :" . $routes->view
	);
	$helper::not_found($info);
	
}

/**
 * Get the master view 
 * 	
 */
require_once __DIR__ . "/views/master.php";
?>
