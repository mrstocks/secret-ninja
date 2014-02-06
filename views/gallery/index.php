<br style="clear: all">
        <div class="container">
        <section class="jumbotron rounded-border" id="content">
          <h3>Notre Galerie</h3>
	<p>
		Voici quelques-unes des meilleurs scènes que nous ayons pu retranscrire sur la pellicule (ou via un appareil numérique).<br />
		Cliquez sur un chien disponible pour en savoir plus. 
	</p>
  </section>

  </div>
  
	<div class="container">
	<script src="/public/js/masonry.pkgd.min.js"></script>
	<div class="row">
	<div class="gallery" >
		<div class="col-md-12">
			<div class="js-masonry"  data-masonry-options='{ "columnWidth": 0, "itemSelector": ".gallery-tile" }'>
			  	<?php  Helper::gallery_tile($galleries); ?>
			  	</div>
			</div>
		</div>
	</div>
