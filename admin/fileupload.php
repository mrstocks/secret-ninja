<?php
require_once __DIR__ . "/config/config.php"; 
require_once __DIR__ . "/models/init.php";


$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = '/opt/secret-ninja/public/images/galleries/';   //2
 
if (!empty($_FILES)) {
     
	$tempFile = $_FILES['file']['tmp_name'];          //3             
	$targetFile =  $storeFolder. $_FILES['file']['name'];  //5	
	
	move_uploaded_file($tempFile,$targetFile);
	$gallery = New Gallery();
	$gallery->filename = "/public/images/galleries/".$_FILES['file']['name'];	
	$gallery->save();

	echo "Saved";

}
?>     
