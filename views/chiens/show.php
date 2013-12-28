<?php


?>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="">

			<h2><?php echo $dog_by_id->name ?></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-7" style="padding-top: 15px;">

<div id="carousel-example-generic" class="carousel slide" style="border: 1px solid #bdc3c7;" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/public/images/8176746583_d352e78650_c.jpg" alt="First image">
      <div class="carousel-caption">
        Dog picture 
      </div>
    </div>
    <?php 
      foreach($dog_by_id->dogimages as $image)  {
       echo '<div class="item"><img src="'. $image->filename .'" /><div class="carousel-caption">Dog</div></div>';
    }
    ?>
   </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
 <br />
			<?php echo $dog_by_id->textdog ?>
		</div>
		<div class="col-lg-5">
			<p><?php echo $dog_by_id->textright ?></p>
			
		</div>
	</div>
</div>

<?php
// TODO 
//print_r($dog_by_id->dogimages);
?>
