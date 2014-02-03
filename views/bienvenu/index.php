<<<<<<< HEAD
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
=======
<br style="clear: all;" />

 <!-- Container for the remaining of the page -->
 <link href='http://fonts.googleapis.com/css?family=Redressed' rel='stylesheet' type='text/css'>

<div class="container">
 <section class="jumbotron rounded-border" id="content">
          <h3>Bienvenue</h3>
          <p>Vous êtes à la recherche d'un nouveau chien ou chiot à partager votre vie avec?<br />
Nous sommes ici pour vous fournir tout ce que vous avez été cherchez!
  </p>
 <p>
   Membre du Doggen Club de France depuis 2009.
 </p>
  </section>

<br style="clear: all;" />

  <div class="news-item rounded-border">
        <div class="row">
            <div class="col-md-5 news">
              <div class="news-post">
                <span class="glyphicon glyphicon-pushpin"></span>
                <?php require __DIR__ . "/../shared/stickynews.php"; ?>
              </div>
              <div class="horizontal-divider"></div>
                <p style="font-weight:bold;">Plus de nouvelles</p>
                <?php require __DIR__ . "/../shared/news.php"; ?>
            </div>
            <div class="col-md-7" id="carousel-div">
                <?php helper::carrousel($carrousel, "frontpagecarrousel"); ?>
            </div>
        </div>
  </div>

<br style="clear: all;" />

<div class="new-dogs rounded-border" >
        <div class="row">
	  <h3>Nos Chiens</h3>
            <div class="col-md-12">
               <?php Helper::featured_posts($featured_posts) ?>
            </div>
        </div>
 </div>

<br style="clear: all;" />
  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>

       <div class="front-page-video rounded-border">
            <div class="video-intro">
                Rien ne nous rend heureux comme voir nos chiens jouent<br/>
            </div>
       	<div>
			<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="570" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
				<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
				<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
				<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
			</video>

      	</div>
      </div>
>>>>>>> ab36d539c734ca1f18a7a133a0186df73bf1f267

            </div>
            <div class="col-md-5">
                <h5>Elevage de Dogues Allemand!</h5>
                <p>Bonjour ou bonne nuit a vous visiteurs sur le site Fees de Celestia, nous sommes de petit elevage de <span>dogue allemand</span> dans la compagne tres profonde a mayenne.
                </p>
            </div>
        </div>
