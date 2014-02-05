<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fees de Celestia - Elevage de Dogue allemand en France</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nous Sommes non tout petit elevage de doggue allemand Dans La mayenne qui vendent des chiens et des chiots au meilleur prix possible!" />
    <meta name="keywords" content="chiens, animaux familiers, chiots, chiens à vendre, chiens, chiots, chiots à vendre | dogs,pets,puppies,dogs for sale,Dogs,puppy,puppy dogs,pets for sale" />
    <meta name="author" content="(C) 2014  Elevage Fees De Celestia">

    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">

    <!-- Loading Bootstrap -->
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/public/css/flat-ui.css" rel="stylesheet">
     <link href="/public/css/lightbox.css" rel="stylesheet">
    <link href="/public/css/video-js.css" rel="stylesheet" type="text/css">
    <script src="/public/js/video.js"></script>
    <link href="/public/css/personal.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="/public/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
	<?php
		/**
		 * A nice menu
		 *
		*/
		include __DIR__ . "/shared/menu.php"; 
	?>


	<?php
		/**
		 * TODO : Check is the file exists or log the error 
		 *
		 */
		if (file_exists(__DIR__ . "/" .$routes->controller . "/" . $routes->view . ".php")) {
			require __DIR__ . "/" .$routes->controller . "/" . $routes->view . ".php";
                }
		else {
			$info = array (
				"Someone found a 404, missing a view", 
				"Controller :" . $routes->controller ." view :" . $routes->view
			);
			$helper::not_found($info);
	
		}
	?>

	<?php	
		/**
		 * Spacejouse footer will all the link 
		 */
		include __DIR__ . "/shared/footer.php"; 
	?>
	
    <!-- Load JS here for greater good =============================-->
    <script src="/public/js/jquery-1.8.3.min.js"></script>
    <script src="/public/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/public/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/bootstrap-select.js"></script>
    <script src="/public/js/bootstrap-switch.js"></script>
    <script src="/public/js/flatui-checkbox.js"></script>
    <script src="/public/js/flatui-radio.js"></script>
    <script src="/public/js/jquery.tagsinput.js"></script>
    <script src="/public/js/jquery.placeholder.js"></script>
    <script src="/public/js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.1/video.js"></script>
    <script src="/public/js/lightbox-2.6.min.js"></script>
    <script src="/public/js/application.js"></script>

        <script>
        $('.dropdown-toggle').dropdown();
      </script>
      
  </body>
</html>
