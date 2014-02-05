
<br style="clear: all;" />

 <!-- Container for the remaining of the page -->
 <link href='http://fonts.googleapis.com/css?family=Redressed' rel='stylesheet' type='text/css'>

<div class="container">
 <section class="jumbotron rounded-border" id="content">
          <h3>Bienvenue au f&eacute;es de celestia</h3>
          <p>Nous sommes un tout petit elevage de doggue allemand dans la mayenne. Si vous aimez les images ou un chiot n'hesitez pas <a href="/index.php/contact">contactez-moi</a>! Nous sommes
             toujours disponnibles pour vous aidez meme si vous voulez pas un chiots.
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
       	<div>
			<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="570" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
				<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
				<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
				<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
			</video>

      	</div>
      </div>
