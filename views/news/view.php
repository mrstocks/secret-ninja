<?php
 /********
  * url /undex.php/news/view/1
  *
  */
$news = News::find($routes->id);
?>
<div class="container">
	<h4><?php echo $news->title?></h4>
	<span> <?php echo $news->date ?></span>
	<p><?php echo $news->leadin ?></p>
	<p><?php echo $news->main ?></p>
</div>
