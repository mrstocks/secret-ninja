  <div class="jumbotron">
  <div class="container">
    <h2>Fees de Celestia</h2>
          <p class="intro">Nous sommes de petit elevage de <span>dogue allemand</span> dans la compagne tres profonde a mayenne. <small>(<a href="/index.php/contact">voire la carte</a>)</small></p>
  </div>
</div>

  <!-- Container for the remaining of the page -->
  <div class="container news-item">

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
<div class="new-dogs" >
 <div class="container">
        <div class="row">
	  <h3>Nouveau dans la maison</h3>
            <div class="col-md-12">
               <?php Helper::featured_posts($featured_posts) ?>
            </div>
        </div>
        </div>
  </div>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>

       <div class="front-page-video">
       	<div>
			<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="600" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
				<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
				<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
				<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
			</video>

      	</div>
      </div>