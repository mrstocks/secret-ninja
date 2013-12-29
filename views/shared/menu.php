<div class="col-md-12">
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
        <li><a href="/index.php/chiot">Les touts petits</a></li>
        <li><a href="/indes.php/installation">Installation</a></li>
        <li><a href="/indes.php/contact">Contactez nous</a></li>
      </ul>
    </div><!--/.nav -->
  </div>
</div>
