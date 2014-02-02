<?php
require_once __DIR__ ."/../models/init.php";

class helper {
	function get_puppy_list() {
		# TODO; only select id +name
		return Matingpuppy::find("all");	
	}
}
?>
