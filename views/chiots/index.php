<div class="container">
 <section class="jumbotron rounded-border" id="content">
          <h3>Chiots</h3>
          <p>Voici une liste de nos meilleurs chiots <br/>
					<a href="/index.php/contact#contact">Contactons nous</a> si intéressé par un
  				</p>
  </section>

<div class="row">
	<div class="col-md-8">
		<div class="col-md-12">

			<?php
				foreach($matings as $id => $mating) 
					{
						$mating_title = $mating->title;
						foreach($mating->matingpuppies as $id => $puppy) 
						{ 

							Helper::puppylist($mating_title, $puppy->image, $puppy->sex, $puppy->color, $puppy->price, $puppy->name, $puppy->information);
						}
					}
			?>
		</div>
	</div>

	<div class="col-md-4 contact">
	<div class="panel-body rounded-border">
		<h3>Comment?</h3>	
		<p>Nous sommes un tout petit élevage de dogues allemans, nous produisons des parfait chiots
		arlequins, noirs et bleus LOF. <br />
		<b>Il vous suffit de cliquez sur un boutton</b> a gauche pour avoir des photos est une description.</br />
		La pluspart des chiots sont destiné a l'expo ou au sein d'unegentil famille.<br />
		<br />
		Vous pouvez aussi consulter : <br />
		<a href="/index.php/gallerie/">Notre gallerie</a><br />
		<?php 
		foreach($dogs as $dog) {
			echo "<a href='/index.php/chiens/show/".$dog->id."'>".$dog->name."</a><br />";
		}	
		?>
		<a href="/index.php/contact">Plus de photo? De l'aide?</a><br />


		</p>
	</div>
	</div>
</div>