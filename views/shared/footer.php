     <div class="row demo-tiles" style="padding-top: 50px;">
        <div class="col-md-3">
          <div class="tile">
            <?php echo helper::image_tag('/public/images/icons/svg/compas.svg', 'title-image'); ?>
            <h3 class="tile-title">Visitez nous</h3>
            <p>Visitez l'elevage, ont a mis in carte pour vous.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Carte google</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile">

            <?php echo helper::image_tag('/public/images/icons/svg/loop.svg', 'title-image'); ?>
            <h3 class="tile-title">Suivi des chiens</h3>
            <p>Nous suivons tout les chien par telephone ou email.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Contact nous</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile">
            <?php echo helper::image_tag('/public/images/icons/svg/pencils.svg', 'title-image'); ?>
            <h3 class="tile-title">Envie de papotter?</h3>
            <p>C'est par ici, ont parle de tout et de rien.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">C'est par la</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile tile-hot">
            <?php echo helper::image_tag('/public/images/icons/svg/chat.svg', 'title-image'); ?>
            <h3 class="tile-title">Social network</h3>
            <p>Nous aimons facebook et twitter, passez nous voir.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Facebook</a>
          </div>

        </div>
      </div> <!-- /tiles --> 




   <footer style="">
      <div class="container" style="margin-top: 60px;">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Un peut sur moi.</h3>
            <?php echo helper::image_tag("/public/images/IMG_0138.png", "rounded float-left-margin-left-15"); ?>
            <p>Bonjour, mon noms est Oliver je suis Anglais et j'ai travaill&eacute; dans l'informatique pour dix ans, en 2009/2010 j'ai 
               decid&eacute; de prendre l'aire donc je suis venu dans la belle campagne normande pour faire mon m&eacute;ti&eacute; que 
               je reve de faire, l'elevage canins.<br/>
               Aussi je vais des site web pour les amis ou personnel vous aimez ce site je peut peut-etre vous aider.<br/>
               Envoyez un mail dand ce cas: <a href="mailto:stocks.oliver@gmail.com" target="_blank">stocks.oliver@gmail.com</a>
            </p>

          </div> <!-- /col-md-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              
	     <h3 class="footer-title">Derniere Nouvelles</h3>
               <?php  require __DIR__ . "/news.php" ?>
              <ul>
              <?php 
		$end = microtime(true);
		$time = number_format(($end - $start), 2);

		echo '<li>This page loaded in ', $time, ' seconds</li>';
		?> 
                </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
