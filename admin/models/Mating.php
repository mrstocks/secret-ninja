<?php
/**
 * List the mating
 */

class Mating extends ActiveRecord\Model {
	static $has_many = Array(
		'matingpuppies'
	);
}
?>
