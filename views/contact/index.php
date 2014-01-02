  		
  		<?php // Script to process contact message information
  		
  		/*
  			TO DO
			[ ] create  mechanism to ensure that script is not sent twice
			[ ] Change Latitude and Longitude of the map so it fits that required
		*/
	
  			$alert_msg = "";   //Store the success or failure message in the alert box
  			$alert_class= "";	 //provides a success class or danger class depending on the validation
  			$valid = TRUE; // Boolean value to detect if data collected in form is valid

  			if(isset($_POST['submit']))
  			{
	 			function died($error) {
	 				global $alert_msg;
	 				global $alert_class;
	 				global $valid;
					$alert_msg .= "Désolé, mais nous n'avons pas reçu votre message pour la raison  suivante:<br/> ";
					$alert_msg .= "<ul>";
					$alert_msg .= $error;
					$alert_msg .= "</ul>";
					$alert_class = "alert alert-danger";
					$valid = TRUE;
				}

				if(!isset($_POST['cnt_email']) || !isset($_POST['cnt_msg']))
				{
					died('<li>Désolé, il semble y avoir un problème avec votre formulaire de demande. S\'il vous plaît vérifier vos entrées et réessayez</li>');
				}

				$full_name = $_POST['cnt_name'];
				$email_from = $_POST['cnt_email']; // required
				$msg_subject = $_POST['cnt_msg_subject'];
				$message = $_POST['cnt_msg']; // required
				$error_message = "";

				$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
			 	if(preg_match($email_exp,$email_from)==0)
			 	{
			  		$error_message .= '<li>L\'adresse e-mail que vous avez entré ne semble pas être valide.</li>';
			  	}

  				if(strlen($_POST['cnt_msg']) < 5)
  				{
  					$error_message .= "<li>Votre message est trop court</li>";
  				}

  				if(strlen($error_message) >0)
  				{
  					died($error_message);
  				}	

				//SMTP needs accurate times, and the PHP time zone MUST be set
				//This should be done in your php.ini, but this is how to do it if you don't have access to that
				if($valid)
				{
					$cnt_email_message = "Contact message details below\n";
  					$cnt_email_message .= "Full Name: ".$full_name."\n";
					$cnt_email_message .= "Email: ".$email_from."\n";
					$cnt_email_message .= "Subject: ".$msg_subject."\n";
					$cnt_email_message .= "Message: ".$message."\n";

	
					date_default_timezone_set('Etc/UTC');
	
					# REAME All ready included in the controller
					# require '../../phpMailer/PHPMailerAutoload.php';

					//Create a new PHPMailer instance
					$mail = new PHPMailer();
					//Tell PHPMailer to use SMTP
					$mail->isSMTP();
					//Enable SMTP debugging
					// 0 = off (for production use)
					// 1 = client messages
					// 2 = client and server messages
					$mail->SMTPDebug = 2;

					//Ask for HTML-friendly debug output
					$mail->Debugoutput = 'html';
					//Set the hostname of the mail server
					$mail->Host = 'smtp.gmail.com';

					//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
					$mail->Port = 587;
					//Set the encryption system to use - ssl (deprecated) or tls
					$mail->SMTPSecure = 'tls';
					//Whether to use SMTP authentication
					$mail->SMTPAuth = true;
					//Username to use for SMTP authentication - use full email address for gmail
					//Username to use for SMTP authentication - use full email address for gmail
					$mail->Username = "fees.de.celestia@gmail.com";
					//Password to use for SMTP authentication
					$mail->Password = "websitefeesdecelestia";

					//Set who the message is to be sent from
					$mail->setFrom('stocks.oliver@gmail.com', 'Stocks Oliver');
					//Set an alternative reply-to address
					$mail->addReplyTo('stocks.oliver@gmail.com', 'Stocks Oliver');
					//Set who the message is to be sent to
					$mail->addAddress('fees.de.celestia@gmail.com', 'Elevage Website');
					//Set the subject line
					$mail->Subject = 'Contact Form Message';
					//Replace the plain text body with one created manually
					$mail->msgHTML($cnt_email_message);
					$mail->AltBody = $cnt_email_message;

					//send the message, check for errors
					if (!$mail->send())
					{
						//log this error somewhere else in the production version
					   echo "Mailer Error: " . $mail->ErrorInfo;
					   died("<li>Nous avons un problème avec nos serveurs s'il vous plaît réessayer plus tard</li>");
					}
					else
					{
					  $alert_msg = "Votre message a été reçu avec succès et nous reviendrons vers vous dès que possible";
	 				  $alert_class = "alert alert-success";
					  $valid = FALSE; // This is to ensure that form data values are not filled
					}
	  			}
	  		}
  		?>

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
 			<div class="<?php echo $alert_class?>"><?php echo $alert_msg?></div>
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
 				<div class="panel panel-info">Mon Adresse</div>
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
                                         <label>Email:</label><a href="mailto:stocks.oliver@gmail.com">stocks.oliver@gmail.com</a><br/>
                                         <label>CV: </label><a href="#"> Download PDF version</a>
								</address>
					</div>
 					</div>
 			</div>
</div>
</div>
