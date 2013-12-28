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


}

$helper = New Helper(); 
