<?php	

$stickynews = Stickynews::last();
// TO DO : Add this in CSS
?>
<h6 class="news-heading">
	<img src="/public/images/icons/png/Icon-news.png" width="30" height="30"/>
	<?php echo $stickynews->title; ?>
</h6>
<p class="palette-paragraph"> 
	<img src="/public/images/icons/svg/calendar.svg" height="12" height="12" alt="Calendar">
		<?php echo $stickynews->date ?>
</p>
<p>
 <?php echo $stickynews->leadin; ?> [<a href="index.php/news/sticky/<?php echo $stickynews->id; ?>">Voir plus...</a>]
</p>
