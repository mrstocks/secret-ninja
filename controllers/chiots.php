<?php
$matings = Mating::find('all', array('order' => 'id desc'));

$dogs = helper::get_dogs_list();
?>
