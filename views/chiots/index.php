<<<<<<< HEAD
<div class="container">
<div class="row" style="">
	<div class="col-md-8 border-right">
 
<?php

// I don't know what i doing so i will just follow the flow
foreach($matings as $id => $mating) {
	
  echo'
    <section class="page-header" id="content">
        <div class="container">';
	// Get the information from the mating
	echo "<h2>". $mating->title."</h2>";
	echo "<p><small>" . $mating->information. "</small></p>";
        echo '</div>';
   	echo '</section>';
	echo '<div class="panel-group" id="accordion">';
	// Get the puppies from that mating
	foreach($mating->matingpuppies as $id => $puppy) {
		$helper::puppylist($puppy->id, $puppy->name, $puppy->information);
	}
	echo '</div>';
	echo "<br />";
}
?>
	</div>
	<div class="col-mb-4" style="margin-left: 15px;">
		<h3>Comment?</h3>	
		<p>Nous sommes un tout petit élevage de dogues allemans, nous produisons des parfait chiots
		arlequins, noirs et bleus LOF. <br />
		<b>Il vous suffit de cliquez sur un boutton</b> a gauche pour avoir des photos est une description.</br />
		La pluspart des chiots sont destiné a l'expo ou au sein d'unegentil famille.<br />
		<br />
		Vous pouvez aussi consulter : <br />
=======

<br style="clear: all">

<div class="container">
 <section class="jumbotron rounded-border" id="content">
          <h3>Nos productions</h3>
          <p>Voici une liste de nos meilleurs chiots <br/>
					<a href="/index.php/contact#contact">Contactons nous</a> si intéressé par un
  				</p>
  </section>
<br style="clear: all">

<div class="row">
	<div class="col-md-8">

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

	<div class="col-md-4 contact">
	<div class="panel-body rounded-border">
		<h4>Comment?</h4>
		<p>Nous sommes un tout petit élevage de dogues allemans, nous produisons des parfait chiots
		arlequins, noirs et bleus LOF. <br />
		<b>Il vous suffit de cliquez sur un boutton</b> a gauche pour avoir des photos est une description.</br />
		La pluspart des chiots sont destiné a l'expo ou au sein d'unegentil famille.
	</p>
	</div>
	<div class="panel-body rounded-border">
	<p>
			<h6> Vous pouvez aussi consulter : </h6 >
>>>>>>> ab36d539c734ca1f18a7a133a0186df73bf1f267
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
</div>
