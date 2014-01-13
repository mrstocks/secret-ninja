<?php
/*****
 * News controller 
 *
 */

if ($routes->view == 'sticky') {
	$news = Stickynews::find($routes->id); 
	} else {
  	$news = News::find($routes->id);
}
?>
