<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free User Interface Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/public/css/flat-ui.css" rel="stylesheet">
    <link href="/public/css/personal.css" rel="stylesheet">

    <link rel="shortcut icon" href="/public/images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="/public/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
	<?php 
		/**
		 * A nice menu
		 *
		*/
		include __DIR__ . "/shared/menu.php"; 
	?>


	<?php
		/**
		 * TODO : Check is the file existe or log the error 
		 *
		 */
		if (file_exists(__DIR__ . "/" .$routes->controller . "/" . $routes->view . ".php")) {
			require __DIR__ . "/" .$routes->controller . "/" . $routes->view . ".php";
                }
		else {
			
			// Redirect to 404
			define("error", "Cette page n'existe plus, le serveur nous dit pardon.");	
	
			$error = Errors::create(array(
				'level'	=> '1', 
				'title'	=> 'Someone found missing view',
				'info'	=> "Controller :" . $routes->controller ." view :" . $routes->view 
			));

			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
			header("Status: 404 Not Found");
			$_SERVER['REDIRECT_STATUS'] = 404;
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
    <script src="/public/js/application.js"></script>
  </div>
  </body>
</html>
