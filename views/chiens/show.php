<br style="clear: all;" />  

<div class="container">
<section class="jumbotron rounded-border" id="content">
    <h3><?php echo $dog_by_id->name ?></h3>
</section>
</div>
<br style="clear: all">
<div class="container">

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
