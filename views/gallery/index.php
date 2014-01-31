        <div class="container">
          <h3>Notre Galerie</h3>
          <p>Voici quelques-uns des grands points de vue que nous avons capturés sur le film (ou la mémoire numérique!)<br />
			Cliquez sur un chien disponible pour en savoir plus.
	</p>
  </div>

<?php
	/* To Do
	- style the various tiles
	- create a fade out css effect
   */
?>
	<div class="container">
	<script src="/public/js/masonry.pkgd.min.js"></script>
	<div class="row">
	<div class="gallery" >
		<div class="col-md-12">
			<div class="js-masonry"  data-masonry-options='{ "columnWidth": 10, "itemSelector": ".gallery-tile" }'>
			  	<?php  Helper::gallery_tile($galleries); ?>
			  	</div>
			</div>
		</div>
	</div>
</div>
