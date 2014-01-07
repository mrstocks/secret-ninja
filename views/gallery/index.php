<?php

foreach($gallerysections as $gallerysection) {
	echo helper::image_tag($gallerysection->filename, 'rounded');
}
?>
