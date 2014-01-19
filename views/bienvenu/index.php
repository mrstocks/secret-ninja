   <section class="page-header" id="content">
        <div class="container">
          <h2>Bienvenue </h2>
          <p class="intro">Nous sommes un petit elevage de doggues allemand dans la Mayenne. <small>(<a href="/index.php/contact">voire la carte</a>)</small></p>
        </div>
  </section>
  <!-- Container for the remaining of the page -->
  <div class="container">

        <div class="row" style="">
            <div class="col-md-5">
                <?php require __DIR__ . "/../shared/stickynews.php"; ?>
                <br />
                <p>Plus de nouvelles</p>
                <?php require __DIR__ . "/../shared/news.php"; ?>
            </div>
            <div class="col-md-7">
                <?php helper::carrousel($carrousel); ?>
            </div>
        </div>

        <hr style="" />
          <!--  -This is just for testing 
             -It will be implemented in PHP
           -->

        <div class="row new-dogs">
				<h3>Nouveau dans la maison</h3>
            <div class="col-md-12">
                <article class="col-md-4 featured-post">
                    <div class="post-image">
                    <img src="/public/images/8176795608_dd03519ded_c.jpg" alt="desc" style="width:100%" />
                    </div>
                    <div clas="post-caption">
                    <h5>Finouka</h5> 
                        <p>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
                    </div>
                </article>
                <article class="col-md-4 featured-post">
			  <div class="post-image">
                    
                    <img src="/public/images/8176795608_dd03519ded_c.jpg" alt="desc" style="width:100%" />
                    </div>
                    <div clas="post-caption">
                        <h5>Finouka</h5> 
                        <p>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
                    </div>
                </article>
                <article class="col-md-4 featured-post">
			  <div class="post-image">
                    <img src="/public/images/8176795608_dd03519ded_c.jpg" alt="desc" style="width:100%" />
                    </div>
                    <div clas="post-caption">
                    <h5>Finouka</h5> 
                        <p>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
                    </div>
                </article>

            </div>
        </div>

        <hr style="" />
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
