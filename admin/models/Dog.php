<?php 
/** 
 * Website errors in the backend i want to log them
 *
 */

class Dog extends ActiveRecord\Model { 
	static $has_many = array(
		array('dogimages')
		);
} 
?>
