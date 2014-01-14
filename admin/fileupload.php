<?php
require_once __DIR__ . "/config/config.php"; 
require_once __DIR__ . "/models/init.php";
require_once __DIR__ . "/helpers/resize-class.php";

$ds          = DIRECTORY_SEPARATOR;  
 
$storeFolder = '/opt/secret-ninja/public/images/galleries/';
 
if (!empty($_FILES)) {
     
	$tempFile = $_FILES['file']['tmp_name'];                      
	$targetFile =  $storeFolder. $_FILES['file']['name']; 
	
	move_uploaded_file($tempFile,$targetFile);
	
	$resizeObj = new resize($targetFile);
	$resizeObj->resizeImage(200, 200, 'crop');
	$resizeObj->saveImage($targetFile . "-resized.jpg", 150);

	$gallery = New Gallery();
	$gallery->filename = "/public/images/galleries/".$_FILES['file']['name'];	
	$gallery->thumb = "/public/images/galleries/".$_FILES['file']['name'] . "-resized.jpg";
	$gallery->save();
}
?>     
