<?php
	/* To Do
	- style the various tiles
   - make the button on the image to be further below
   - only first slider appears to be working
   - adjust the see more button and the indicator
   - display the see more button on hover
   */
?>


	<div class="row">
	<h3>Welcome to our Gallery</h3>
	<p>Below are some of the great views which we have captured on film (or digital memory!)<br/>
		Click on any link below to find out more.</p>
	<div class="gallery">
		<div class="col-md-8">
				<div  class="col-md-6">
					<div class="gallery-tile">
							<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>
				
				<div class="col-md-6">
						<div class="gallery-tile">
							<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>

				<div class="col-md-12">
						<div class="gallery-tile-lg">
							<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>
				<div class="col-md-6">
						<div class="gallery-tile">
								<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>
				<div class="col-md-6">
						<div class="gallery-tile">
							<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>
			</div>
				
				<div class="col-md-4">
						<div class="gallery-tile-ln">
							<?php helper::carrousel($gallerysections); ?>
						</div>
						<div class="gallery-tile-ln">
							<?php helper::carrousel($gallerysections); ?>
						</div>
						<div class="gallery-tile-ln">
							<?php helper::carrousel($gallerysections); ?>
						</div>
				</div>
			</div>
	</div>