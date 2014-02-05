<?php
 /********
  * url /undex.php/news/view/1
  *
  */
?>
<<<<<<< HEAD
<br style="clear:all;">
<div class="container">
	<div class="row">
		<div class="col-md-3" style="padding-top: 15px;">
			<div class="panel-body rounded-border" style="background-color: white;">
				<p class="palette-paragraph" style="margin-left: 15px; padding-top: 10px;">
        	        	         <img src="/public/images/icons/svg/calendar.svg" height="10" height="10" alt="Calendar"> Le <?php echo $news->date ?><br />
					<span class="fui-user"></span> Par <a href="mailtp:stocks.oliver@gmail.com">Stocks Oliver</a>
		
                	        </p>
				<big>News prec&eacute;dante</big>
				<?php echo $helper::cdn_static('arrow.png', ''); ?>
				<ul>
				<?php
                	        foreach ($previous as $pnews) {
=======
      <div class="container">
        <section class="jumbotron rounded-border" id="content">
          	<h3>Nos Journal</h3>
          	<p>Levez-vous à jour avec les dernières nouvelles et nos événements intéressants
			</p>
  			</section>
	<div class="row">
		<div class="col-md-3">
			<div class="footer-banner rounded-border">
				<p class="palette-paragraph">
	               <img src="/public/images/icons/svg/calendar.svg" height="10" alt="Calendar"> Le <?php echo $news->date ?><br />
						<span class="fui-user"></span> Par <a href="mailto:stocks.oliver@gmail.com">Stocks Oliver</a>
				</p>
			<big>News precedente</big>
			<ul>
			<?php
            foreach ($previous as $pnews) {
>>>>>>> 8d118a9cabd90ac371e33956d373164c5a969d35
					if ($sticky == true) {
						echo "<li><small><a href='/index.php/news/sticky/".$pnews->id."'>".$pnews->title."</a></small></li>";
					} else {
						echo "<li><small><a href='/index.php/news/view/".$pnews->id."'>".$pnews->title."</a></small></li>";
					}
				}
<<<<<<< HEAD
                        	?>
				</ul>
			</div>	
		</div>
		<div class="col-md-9" style="">
			<section class="jumbotron rounded-border" id="content">
				<h4><?php echo $news->title?></h4>
			</section>
			<br style="clear:all;">
			<?php
			if ($sticky == true) {
				echo $helper::cdn_image($news->image, 'stickynews', $news->id, 'image', 'rounded'); 
			} else { 
				echo $helper::cdn_image($news->image, 'news', $news->id, 'image', 'rounded'); 
			}
			?>
			<br style="clear:all" />
			<div class="panel-body rounded-border" style="background-color: white;">
			<br style="clear:all;">
			<a href="#main"></a>
			<p><b><?php echo $news->leadin ?></b></p>
			<p><?php echo $news->main ?></p>
			
			<?php echo $helper->back_link('btn-inverse',"Retour a l'acceuil"); ?>
			</div>
		
=======
          ?>
			</ul>
			</div>
		</div>
	
		<div class="col-md-9">
			<div class="news-proper rounded-border">
				<h4><?php echo $news->title?></h4>
				<?php
				if ($sticky == true) {
					echo $helper::cdn_image($news->image, 'stickynews', $news->id, 'image', 'img-thumbnail'); 
				} else { 
					echo $helper::cdn_image($news->image, 'news', $news->id, 'image', 'img-thumbnail'); 
				}
				?>
				<p><b><?php echo $news->leadin ?></b></p>
				<p><?php echo $news->main ?></p>
				
				<?php echo $helper->back_link('btn-info small-btn',"Retour a l'acceuil"); ?>
			</div>
>>>>>>> 8d118a9cabd90ac371e33956d373164c5a969d35
		</div>
	</div>
</div>
