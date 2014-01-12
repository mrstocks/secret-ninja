<?php
 /********
  * url /undex.php/news/view/1
  *
  */
?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="">

			<h4><?php echo $news->title?></h4>
			<img src="<?php echo $news->image; ?>" class="rounded" style="width: 100%;" alt='' />
		</div>
	</div>

        <div class="row">
		<div class="col-md-3" style="padding-top: 15px;">

		<p class="palette-paragraph" style="margin-left: 15px; padding-top: 10px;">
                         <img src="/public/images/icons/svg/calendar.svg" height="10" height="10" alt="Calendar"> Le <?php echo $news->date ?><br />
			<span class="fui-user"></span> Par <a href="mailtp:stocks.oliver@gmail.com">Stocks Oliver</a>
		
                        </p>
		</div>
		<div class="col-md-9" style="padding-top: 15px;">
			<a href="#main"></a>
			<p><b><?php echo $news->leadin ?></b></p>
			<p><?php echo $news->main ?></p>
			
			<?php echo $helper->back_link('btn-inverse',"Retour a l'acceuil"); ?>
		
		</div>
	</div>
</div>

<hr />
