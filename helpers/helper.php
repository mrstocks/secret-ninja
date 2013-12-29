<?php
/****
 * This class just saves typeing too much and take the legic of the view out of 
 * the controller
 *
 */

class Helper {

	/**	
	 * Get the list of the dogs for the menu
         *
         */	
	public function get_dogs_list() {
		// Only get the id and the name
		$dogs = Dog::find('all', array('select' => 'id, name'));
	
		return $dogs;	
	}
	
	/**
	 * Call if not found 
         *
         */
	public function not_found($info) {
		$error = Errors::create(array(
			'level'	=> '1', 
			'title'	=> $info[0],
			'info'	=> $info[1] 
		));

		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri");
		exit;
	}

	/** 
	 * Back link
         *
         */
	public function back_link($class, $name) {
		$host  = $_SERVER['HTTP_HOST'];

		return "<a href='http://$host' class='btn btn-block btn-lg $class'>$name</a>";

	}

}

$helper = New Helper(); 
