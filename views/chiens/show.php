<<<<<<< HEAD
<section class="page-header" id="content">
  <div class="container">
    <h2><?php echo $dog_by_id->name ?></h2>
  </div>
</section>

<div class="container">
=======
<br style="clear: all;" />  

<div class="container">
<section class="jumbotron rounded-border" id="content">
    <h3><?php echo $dog_by_id->name ?></h3>
</section>
</div>
<br style="clear: all">
<div class="container">
>>>>>>> ab36d539c734ca1f18a7a133a0186df73bf1f267

	<div class="row">
		<div class="col-lg-7" style="padding-top: 15px;">

   		<?php $helper::carrousel($dog_by_id->dogimages, "dogimage"); ?>

		 <br />
			<?php echo $dog_by_id->textdog ?>
		</div>
		<div class="col-lg-5">
			<p><?php echo $dog_by_id->textright ?></p>
			
		</div>
	</div>
</div>
