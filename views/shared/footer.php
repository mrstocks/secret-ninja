<br style="clear: all;" />
<div class="container">
<section class="demo-tiles rounded-border">
     <div class="row">
     <h4>Rester en contact et de ne jamais manquer les bonnes choses</h4>
        <div class="col-md-3">
          <div class="tile">
	    <img src="/public/images/icons/png/Map.png" height="100" width="100" class="title-image" />
            <h3 class="tile-title">Visitez nous</h3>
            <p>Visitez l'elevage, ont a mis in carte pour vous.</p>
            <a class="btn btn-primary google btn-large btn-block" href="/index.php/contact#map"><span class="glyphicon glyphicon-map-marker"></span> Carte google</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile">

            <?php echo helper::image_tag('/public/images/icons/png/Pencils.png', 'title-image'); ?>
            <h3 class="tile-title">Suivi des chiens</h3>
            <p>Nous suivons tout les chien par telephone ou email.</p>
            <a class="btn btn-primary btn-large btn-block" href="/index.php/contact#contact">Contact nous</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile">
            <?php echo helper::image_tag('/public/images/icons/png/Mail.png', 'title-image'); ?>
            <h3 class="tile-title">Envie de papotter?</h3>
            <p>C'est par ici, ont parle de tout et de rien.</p>
            <a class="btn btn-primary mail btn-large btn-block" href="mailto:stocks.oliver@gmail.com">stocks.oliver@gmail.com</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="tile tile-hot">
            <?php echo helper::image_tag('/public/images/icons/png/Chat.png', 'title-image'); ?>
            <h3 class="tile-title">Social network</h3>
            <p>Nous sommes sociale! Venir nous voir sur facebook</p>
            <a class="btn btn-primary  fbk btn-large btn-block" href="http://www.facebook.com/finouka.stocks">Facebook</a>
          </div>

        </div>
      </div> <!-- /tiles --> 
</div>


  </div>
   <footer style="">
      </div> <!-- /tiles -->
</section>
</div>

   <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
     <br style="clear: all" />
            <?php echo helper::image_tag("/public/images/IMG_0138.png", "rounded float-left-margin-left-15"); ?>
	    <p>Bonjour je suis Oliver, ex webmaster. Depuis 2009 j'ai decider de prendre l'air dans la campagne normande . a faire un élevage de dog allemand , nous avons pris un chin qui 'apelle finouka chez les rêve de burton 'était le début de la passion pour ses types de chiens maintenant l'élevages'agrandit qui comporte issi, et hyro. Dans le temps libre nous fesons également des site web pour les éleveur de chiens. Si vous étent interessé visitez notre section contact.
          </div> <!-- /col-md-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
	     <h3 class="footer-title">Derniere Nouvelles</h3>
               <?php  require __DIR__ . "/news.php" ?>
            </div>
          </div>
        </div>
      </div>
    </footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34857815-1', 'elevage-fees-de-celestia.fr');
  ga('send', 'pageview');

</script>
