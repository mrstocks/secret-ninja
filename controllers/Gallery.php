<?php
/******
 *
 *
 */
class Gallery extends ActieRecord\Model
{
	static $has_many = Array(
		'galleryimages'
	);
}
?>
