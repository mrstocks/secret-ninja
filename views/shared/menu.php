<<<<<<< HEAD
<div id="header"></div>  

<div class="navbar navbar-inverse" role="navigation" role="banner">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/index.php">Fées De Celestia</a>
  </div>
    <div class="navbar-collapse collapse"  id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class="<?php if ($routes->controller == 'bienvenu') { echo 'active'; } ?>"><a href="/">Accueil</a></li>
        <li class="<?php if ($routes->controller == 'chiens') { echo 'active'; } ?>"><a href="#">Les toutous<span class="navbar-unread">1</span></a>
          <ul>
            <?php 
            $dog_menu = $helper->get_dogs_list();	
            foreach ($dog_menu as $dog) {  
              echo "<li><a href='/index.php/chiens/show/". $dog->id ."'>". $dog->name ."</a></li>"; 
            } 
            ?>	
          </ul> <!-- /Sub menu -->
        </li>
        <li class="<?php if ($routes->controller == 'chiots') { echo 'active'; } ?>"><a href="/index.php/chiots">Les touts petits</a></li>
        <li class="<?php if ($routes->controller == 'gallery') { echo 'active'; } ?>"><a href="/index.php/gallery">Gallery</a></li>
        <li class="<?php if ($routes->controller == 'contact') { echo 'active'; } ?>"><a href="/index.php/contact">Contactez nous</a></li>
      </ul>
    </div><!--/.nav -->
    </div>
  </div>
=======
<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>


<div id="header"></div>
<header>
    		<nav class="navbar navbar-inverse" role="navigation">
  			<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<div class="navbar-brand">
			<p style="font-family: 'The Girl Next Door', cursive;">
		  	<a href="/index.php">F&eacute;es de Celestia</a><br />
			  <span class="nav-brand-extra">Elevage de doggue allemand dans ma mayenne</span>
			</p>
			</div>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav nav-pills pull-right">
			            <li class="<?php if ($routes->controller == 'bienvenu') { echo 'active'; } ?>"><a href="/index.php">Accueil<br></a></li>
			            <li class="<?php if ($routes->controller == 'chiens') { echo 'active'; } ?>"><a href="#">Chiens &nbsp;<span class="glyphicon glyphicon-chevron-down"</span></a>
								<ul>
					             <?php 
					             $dog_menu = $helper->get_dogs_list();	
					             foreach ($dog_menu as $dog) {
					               echo "<li><a href='/index.php/chiens/show/". $dog->id ."'>". $dog->name ."</a></li>"; 
					             } 
					             ?>	
					           </ul> <!-- /Sub menu -->
			            </li>
			            <li class="<?php if ($routes->controller == 'chiots') { echo 'active'; } ?>"><a href="/index.php/chiots">Chiots</a></li>
			            <li class="<?php if ($routes->controller == 'gallery') { echo 'active'; } ?>"><a href="/index.php/gallery">Gallerie</a></li>
			            <li class="<?php if ($routes->controller == 'contact') { echo 'active'; } ?>"><a href="/index.php/contact">Contact</a></li>
		        	</ul>
		    </div><!-- /.navbar-collapse -->
<br style="clear: all;" />
		  </div><!-- /.container-->
		</nav>
</header>
>>>>>>> ab36d539c734ca1f18a7a133a0186df73bf1f267
