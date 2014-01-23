<?php
 /********
  * url /undex.php/news/view/1
  *
  */
?>
<div class="container">
	<div class="row">
		<div class="col-md-3" style="padding-top: 15px;">

			<p class="palette-paragraph" style="margin-left: 15px; padding-top: 10px;">
                         <img src="/public/images/icons/svg/calendar.svg" height="10" height="10" alt="Calendar"> Le <?php echo $news->date ?><br />
			<span class="fui-user"></span> Par <a href="mailtp:stocks.oliver@gmail.com">Stocks Oliver</a>
		
                        </p>
			<big>News precedente</big>
			<?php echo $helper::cdn_static('arrow.png', ''); ?>
			<ul>
			<?php
                        foreach ($previous as $pnews) {
				if ($sticky == true) {
					echo "<li><small><a href='/index.php/news/sticky/".$pnews->id."'>".$pnews->title."</a></small></li>";
				} else {
					echo "<li><small><a href='/index.php/news/view/".$pnews->id."'>".$pnews->title."</a></small></li>";
				}
			}
                        ?>
			</ul>
		</div>
	
		<div class="col-md-9" style="">

			<h4><?php echo $news->title?></h4>
			<?php
			if ($sticky == true) {
				echo $helper::cdn_image($news->image, 'stickynews', $news->id, 'image', 'rounded'); 
			} else { 
				echo $helper::cdn_image($news->image, 'news', $news->id, 'image', 'rounded'); 
			}
			?>
			<a href="#main"></a>
			<p><b><?php echo $news->leadin ?></b></p>
			<p><?php echo $news->main ?></p>
			
			<?php echo $helper->back_link('btn-inverse',"Retour a l'acceuil"); ?>
		
		</div>
	</div>
</div>

<hr />
