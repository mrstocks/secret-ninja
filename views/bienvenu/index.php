   <section class="page-header" id="content">
        <div class="container">
          <h2>Bienvenue </h2>
          <p class="intro">Nous sommes un petit elevage de dogues allemand dans la Mayenne. <small>(<a href="/index.php/contact">voire la carte</a>)</small></p>
        </div>
  </section>
  <!-- Container for the remaining of the page -->
  <div class="container">

        <div class="row" style="">
            <div class="col-md-5">
                <?php require __DIR__ . "/../shared/stickynews.php"; ?>
                <p>Plus de nouvelles</p>
                <?php require __DIR__ . "/../shared/news.php"; ?>
            </div>
            <div class="col-md-7">
                <?php helper::carrousel($carrousel); ?>
            </div>
        </div>
        </div>

<div class="hr"><hr /></div>
 <div class="container">

          <!--  -This is just for testing 
             -It will be implemented in PHP
            WHAT SHOULD IT DO? FIXME
            -->

        <div class="row new-dogs">
	  <h3>Nouveau dans la maison</h3>
            <div class="col-md-12">
               <?php Helper::featured_posts($featured_posts) ?>
            </div>
        </div>
        </div>

    <div class="hr"><hr /></div>
        <div class="container">
        <div class="row">
            <div class="col-md-7" style="padding-top: 115px;">
                <!--[if !IE]> -->
                <video class="video-js" controls preload="auto" width="630" height="349" poster="/public/images/video/poster.jpg" data-setup="{}">
                    <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4">
                        <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm">
                </video>
                <!-- <![endif]-->

                <!--[if IE]>
                <video class="video-js" controls preload="auto" width="630" height="256" poster="http://video-js.zencoder.com/oceans-clip.jpg" data-setup="{}">
                  <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4'/>
                  <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm'/>
                </video>
              <![endif]-->

            </div>
            <div class="col-md-5">
                <h5>Elevage de Dogues Allemand!</h5>
                <p>Bonjour ou bonne nuit a vous visiteurs sur le site Fees de Celestia, nous sommes de petit elevage de <span>dogue allemand</span> dans la compagne tres profonde a mayenne.
                </p>
            </div>
        </div>
