<?php
/*****
 * News controller 
 *
 */

if ($routes->view == 'sticky') {
  $news = Stickynews::find($routes->id);
  $previous = Stickynews::find("all");
  $sticky = true; 
  } else {
  $news = News::find($routes->id);
  $sticky = false;
  $previous = News::find("all");
}
?>
