<?php
	/* To Do
	- style the various tiles
	- create a fade out css effect
   */
?>

	<script src="/public/js/masonry.pkgd.min.js"></script>
	<div class="row">
	<h3>Welcome to our Gallery</h3>
	<p>Below are some of the great views which we have captured on film (or digital memory!)<br/>
		Click on any link below to find out more.</p>
		<div class="gallery" >
			<div class="col-md-12">
				<div class="js-masonry"  data-masonry-options='{ "columnWidth": 10, "itemSelector": ".gallery-tile" }'>
				  	<?php  Helper::gallery_tile($galleries); ?>
				  	</div>
				</div>
			</div>
		</div>
