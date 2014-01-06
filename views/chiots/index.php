
<div class="row" style="">
	<div class="col-md-8 border-right">
 
<?php

// I don't know what i doing so i will just follow the flow
foreach($matings as $id => $mating) {
	
	// Get the information from the mating
	echo "<h3>". $mating->title."</h3>";
	echo "<p>" . $mating->information. "</p>";

	echo '<div class="panel-group" id="accordion">';
	// Get the puppies from that mating
	foreach($mating->matingpuppies as $id => $puppy) {
		$helper::accordion($id, $puppy->name, $puppy->information);
	}
	echo '</div>';

	echo "<hr />";
}
?>
	</div>
	<div class="col-mb-4" style="margin-left: 15px;">
		<h3>Comment?</h3>	
		<p>Nous sommes un tout petit élevage de dogues allemans, nous produisons des parfait chiots 
		arlequins, noirs et bleus LOF. <br />
		Il vous suffit de cliquez sur un boutton a gauche pour avoir des photos est une description.</br />
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
