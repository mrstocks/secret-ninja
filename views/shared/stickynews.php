<?php	

$stickynews = Stickynews::last();
// TO DO : Add this in CSS
?>
<<<<<<< HEAD
<h6 class="news"><img src="/public/images/icons/png/Icon-news.png" width="30" height="30"/> <?php echo $stickynews->title; ?><h6>
<p class="palette-paragraph"> <img src="/public/images/icons/svg/calendar.svg" height="12" height="12" alt="Calendar"> <?php echo $stickynews->date ?></p>
<p>
  <?php echo $stickynews->leadin; ?><br /><br />
<a href="index.php/news/sticky/<?php echo $stickynews->id; ?>" class="btn btn-block btn-lg btn-info">Voir cette nouvelle</a>
</p>
<div class="hr"><hr /></div>
=======
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
>>>>>>> ab36d539c734ca1f18a7a133a0186df73bf1f267
