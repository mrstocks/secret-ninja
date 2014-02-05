
<br style="clear: all;" />
	<!-- Loading JS for Google Maps -->
  	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpH0KBf6QUYGff2dAFwbVhEtYrF_zfA_U&sensor=false">
    </script>
    <a name="map"></a>
    <script type="text/javascript">

    	var laGuiltiere = new google.maps.LatLng(48.491066, -0.449788);
		var marker;
		var map;

		function initialize() {
		  var mapOptions = {
		    zoom: 14,
		    center: laGuiltiere
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		          mapOptions);

		  marker = new google.maps.Marker({
		    map:map,
		    title:"Vous pouvez nous trouver ici",
		    animation: google.maps.Animation.DROP,
		    position: laGuiltiere
		  });
		  google.maps.event.addListener(marker, 'click', toggleBounce);
		}

		function toggleBounce() {

		  if (marker.getAnimation() != null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		    setTimeout(toggleBounce, 5000);
		  }
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  <div class="container">
	<section class="jumbotron rounded-border" id="content">
          	<h3>Contactez-nous</h3>
          	<p>S'il vous plaît nous localiser à l'aide de notre carte ci-dessous.<br/>
 				Vous pouvez aussi parler à nous en laissant <a href="#contact">un message ici.</a>
				</p>
  </section>
  </div>

<br style="clear: all;" />
	<div class="container">
 	<div class="row">
 		<div>
 			<?php echo $alert_msg?>

 			<!-- Google maps will be drawn here -->
 			<div class="col-md-12">
     		 <div class="gmap rounded-border" id="map-canvas">
          </div>
			</div>

		</div>

		<div class="contact">
 		<div class="col-md-9 ">
<br style="clear: all;" />
 			<div class="panel panel-info rounded-border">
				<a name="contact"></a>
 				<div class="panel-heading">Laissez votre message ici</div>
				<div class="panel-body">
						<form class="form-horizontal" role="form"  name="contact_form" id="contact_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					 <div class="form-group">
			    <label for="cnt_name" class="col-lg-2 control-label">Full Name</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" name="cnt_name" id="cnt_name" placeholder="Full Name" value="<?php if(isset( $_POST['cnt_name']) && $valid){echo $_POST['cnt_name'];}?>" />
			    </div>
			   </div>
			  <div class="form-group">
			    <label for="cnt_email" class="col-lg-2 control-label">Email <span class="required_star">*</span></label>
			    <div class="col-lg-9">
			      <input type="email" class="form-control" id="cnt_email"  name="cnt_email" placeholder="Email Adress" required="required" value="<?php if(isset( $_POST['cnt_email']) && $valid){echo $_POST['cnt_email'];}?>" />
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg_subject" class="col-lg-2 control-label">Subject</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" id="cnt_msg_subject" name="cnt_msg_subject" placeholder="Message Subject" value="<?php if(isset( $_POST['cnt_msg_subject']) && $valid){echo $_POST['cnt_msg_subject'];}?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg" class="col-lg-2 control-label">Message <span class="required_star">*</span></label>
			    <div class="col-lg-9">
			    <textarea class="form-control" name="cnt_msg" id="cnt_msg" rows="7" required="required"><?php if(isset( $_POST['cnt_msg']) && $valid){echo $_POST['cnt_msg'];}?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			     <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit"  name="submit" id="submit" class="btn btn-primary">Submit Message</button>
				    </div>
			  </div>
			  </form>
			</div>
		</div>
		</div>

		<div class="col-md-3">
<br style="clear: all;" />
				<?php echo helper::image_tag('/public/images/arrow.png', ''); ?>
					<div class="panel-body rounded-border">
                                  <div class="address">
                                      <address>
                                         <!-- Company name -->
                                         <label>Name:</label> Oliver Stocks<br/>
                                         <!-- Address -->
                                         <label>Address:</label>
                                         Les fées de Celestia<br/>
                                         La Guiltiere, 53110 Thuboeuf<br/>
                                         France<br/>
                                         <!-- Phone number -->
                                         <label>Phone: </label> (0033) 6765913293.
                                         <label>Email:</label> <a href="mailto:stocks.oliver@gmail.com">stocks.oliver@gmail.com</a><br/>
								</address>
					</div>
 					</div>
 			</div>
 			</div>
</div>
