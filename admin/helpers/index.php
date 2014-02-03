<?php

	// *** Include the class
	include("resize-class.php");

	// *** 1) Initialise / load image
	$resizeObj = new resize('/opt/secret-ninja/public/galleries/test.jpg');

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(200, 200, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage('//opt/secret-ninja/public/galleries/test-resized.jpg', 150);

?>
