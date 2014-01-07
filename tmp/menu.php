  <div class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse-01"></button>
    </div>            
    <div class="navbar-collapse collapse navbar-collapse-01">
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
        <li class="<?php if ($routes->controller == 'gallery') { echo 'active'; } ?>"><a href="/index.php/gallery">Gallerie</a></li>
        <li class="<?php if ($routes->controller == 'contact') { echo 'active'; } ?>"><a href="/index.php/contact">Contactez nous</a></li>
      </ul>
    </div><!--/.nav -->
  </div>
