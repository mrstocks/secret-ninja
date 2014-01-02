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
}
?>

