<?php


?>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="">

			<h2><?php echo $dog_by_id->name ?></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-7" style="padding-top: 15px;">

   		<?php $helper::carrousel($dog_by_id->dogimages); ?>

		 <br />
			<?php echo $dog_by_id->textdog ?>
		</div>
		<div class="col-lg-5">
			<p><?php echo $dog_by_id->textright ?></p>
			
		</div>
	</div>
</div>

<?php
// TODO 
//print_r($dog_by_id->dogimages);
?>
