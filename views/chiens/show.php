<br style="clear: all;" />  

<div class="container">
<section class="jumbotron rounded-border" id="content">
    <h3><?php echo $dog_by_id->name ?></h3>
</section>


	<div class="row">
		<div class="col-lg-7">
			<div  class="dog-carrousel">
   			<?php $helper::carrousel($dog_by_id->dogimages, "dogimage"); ?>
   			</div>
   	<div class="rounded-border jumbotron  dog-info">
	   			<h3>Plus d'informations</h3>
		<br style="clear: all;" />
 		<?php echo $dog_by_id->textdog ?>
		</div>
		</div>
		<div class="col-lg-5">
			<div class="dog-text">
			<p><?php echo $dog_by_id->textright ?></p>
		</div>

		</div>
	</div>
</div>
