<?php
 /********
  * url /undex.php/news/view/1
  *
  */
?>
<div class="container">
	<div class:"row">
		<div class="col-md-12" style="">

			<h4><?php echo $news->title?></h4>
			<img src="<?php echo $news->image; ?>" style="width: 100%;" alt='' />
		</div>
	</div>

        <div class="row">
		<div class="col-md-4" style="padding-top: 15px;">
			<img src="/public/images/icons/svg/clocks.svg" style="float: left; padding-right: 10px;" alt="Watches"> 
                        <small>
                          <?php echo $news->date ?><br />
				Par <a href="mailtp:stocks.oliver@gmail.com">Stocks Oliver</a>
                        </small>
		</div>
		<div class="col-md-8" style="padding-top: 15px;">
			<a href="#main"></a>
			<p><b><?php echo $news->leadin ?></b></p>
			<p><?php echo $news->main ?></p>
		</div>
	</div>
</div>

<hr />
