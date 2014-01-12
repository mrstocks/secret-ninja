

	<!-- Loading JS for Google Maps -->
  	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpH0KBf6QUYGff2dAFwbVhEtYrF_zfA_U&sensor=false">
    </script>
    <a name="map"></a>
    <script type="text/javascript">

      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(48.491066, -0.449788),
          zoom: 10
        };	
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<div class="container">
 	<div class="row">
 		<div>
 			<?php echo $alert_msg?>
 			<h4>Contactez-nous</h4>
 			<h6>S'il vous plaît nous localiser à l'aide de notre carte ci-dessous.<br/>
 				Vous pouvez aussi parler à nous en laissant <a href="#contact">un message ici.</a></h6>

 			<!-- Google maps will be drawn here -->
     		 <div class="gmap" id="map-canvas">
          </div>

		</div>
 		<div class="col-md-9">
 			<div class="panel panel-info">
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
				<?php echo helper::image_tag('/public/images/arrow.png', ''); ?>
					<div class="panel-body">
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
                                         <label>CV: </label> <a href="#">Download PDF version</a>
								</address>
					</div>
 					</div>
 			</div>
</div>
</div>
