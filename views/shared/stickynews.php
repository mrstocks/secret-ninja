<?php	

$stickynews = Stickynews::last();
// TODO : Add this in CSS
?>
<div style="">
<b><?php echo $stickynews->title; ?><b><br ><small><i><?php echo $stickynews->date ?></i></small>
<hr />
<p>
  <?php echo $stickynews->leadin; ?><br />
  <a href="index.php/news/view/<?php echo $stickynews->id; ?>">Voir plus</a>
</p>
</div>
