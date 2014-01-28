<div id="header"></div>  
<nav class="navbar navbar-inverse" role="navigation" role="banner">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
      <div class="navbar-brand">
        <img src="/public/images/logo.png" height="50" alt="Our Logo" /> <a href="/index.php">Fées De Celestia</a>
      </div>
  </div>

    <div class="navbar-collapse collapse navbar-collapse-01"  id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if ($routes->controller == 'bienvenu') { echo 'active'; } ?>"><a href="/">Accueil</a>
        </li>
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
  </nav>