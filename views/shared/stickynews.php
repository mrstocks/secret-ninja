<?php	

$stickynews = Stickynews::last();
// TODO : Add this in CSS
?>
<h6><img src="/public/images/icons/png/Icon-news.png" width="30" height="30"/> <?php echo $stickynews->title; ?><h6>
<p class="palette-paragraph"> <img src="/public/images/icons/svg/calendar.svg" height="12" height="12" alt="Calendar"> <?php echo $stickynews->date ?></p>
<hr />
<small>
  <?php echo $stickynews->leadin; ?><br /><br />
<a href="index.php/news/sticky/<?php echo $stickynews->id; ?>" class="btn btn-block btn-lg btn-info">Voir cette nouvelle</a>
</small>
