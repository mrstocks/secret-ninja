<?php
/************
* This file we generate all the routes and tell us
* example :
* 	/index.php 		returns controller welcome
*	/index.php/news		returns controller news
*	/index/php/news/show	returns controller news - view show
*	/index.php.news/show/2	returns controller news - view show - id 2
*
*	Have fun - oliver
*/

class Routes {

	private static $instance = null;
	public $php_self;
	public $controller;
	public $view;
	public $id;
	public $tmp;


	public static function getInstance()
	{
        	if (self::$instance === null) {
			self::$instance = new Routes();
		}
		return self::$instance;
	}

	public function __construct ($path) {
		$this->php_self = $path;
	}

	private function __clone()
	{
		// No clones
	}

	// See what controller we are in
	public function parse($path) {
		// explode the path in an array
		$this->tmp = explode("/", $path);

		// we don't with the first one
		array_shift($this->tmp);

		// Sizeof return a string stupid php
		$array_size = sizeof($this->tmp);

		// We are in the welcome page
		if ($array_size == 1) {
			$this->controller = "bienvenu";
			$this->view = "index";

		} else {
			// we are in a controller
			$this->controller = $this->tmp[1];
			$this->view = "index";

			// Maybe we have a view if so overwrite the $this->view
			if (isset($this->tmp[2])) {
				$this->view = $this->tmp[2];
			}

			// Maybe we have an id
			if (isset($this->tmp[3])) {
				$this->id = $this->tmp[3];
			}

		}
	}
}

$routes = New Routes($_SERVER['REQUEST_URI']);
$routes->parse($routes->php_self);

// testing
/* TODO remove
	echo "<pre>";
	echo $routes->controller. "<br />";
	echo $routes->view."<br />";
	echo $routes->id."<br />";
	echo "</pre>";
*/

#echo "<pre>";
#print_r($_SERVER);
#echo "</pre>";
#:exit;
?>
