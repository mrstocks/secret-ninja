
  		<?php // Script to process contact message information
  			
  			$alert_msg = "";   //Store the success or failure message in the alert box
  			$alert_class= "";	 //provides a success class or danger class depending on the validation
  			if(isset($_POST['submit']))
  			{
  				/* 
  					DO SOME VALIDATION CHECKS ON THE EMAIL AND MESSAGE SENT
  				*/
  				if( strlen($_POST['cnt_msg'] < 10))
  				{
  					$alert_msg .= "<li>Please Your message is too short</li>";
  				}

  				$alert_msg = "<ul>";
  				$alert_msg = "<li>Sorry the e-mail address does not appear to be valid";
  				$alert_msg = "<li>Please Your message is too short</li>";
  				$alert_msg .= "</ul>";
				
				$cnt_msg_body = $_POST['cnt_msg_subject'];
				$alert_class = "alert alert-danger";

				//SMTP needs accurate times, and the PHP time zone MUST be set
				//This should be done in your php.ini, but this is how to do it if you don't have access to that
				date_default_timezone_set('Etc/UTC');

				require '../../phpMailer/PHPMailerAutoload.php';

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
				$mail->Username = "stocks.oliver@gmail.com";
				//Password to use for SMTP authentication
				$mail->Password = "yourpassword";
				//Set who the message is to be sent from
				$mail->setFrom('stocks.oliver@gmail.com', 'Stocks Oliver');
				//Set an alternative reply-to address
				$mail->addReplyTo('stocks.oliver@gmail.com', 'Stocks Oliver');
				//Set who the message is to be sent to
				$mail->addAddress('whoto@example.com', 'John Doe');
				//Set the subject line
				$mail->Subject = 'Contact Form Message';
				//Replace the plain text body with one created manually
				$mail->msgHTML($cnt_msg_body);
				$mail->AltBody = $cnt_msg_body;

				//send the message, check for errors
				if (!$mail->send()) {
					//log this erros somewhere else in the production version
				    echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
				    echo "Thanks for you message. We will get in touch as soon as possible";
				}
  			}
  		?>

<div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="<?php echo $alert_class?>"><?php echo $alert_msg?></div>
 			<h4>Get In Touch</h4>
 			<h6>Please locate us using our map below.<br/>
 				You can also talk to us by leaving a message here.</h6>

 			<!-- Google maps -->
                   <div class="gmap">
                      	<!-- Embeded code for Google Maps  -->
                   </div>
 		</div>
 		<div class="col-md-9">
 			<div class="panel panel-info">
 				<div class="panel-heading">Leave your message here</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					 <div class="form-group">
			    <label for="cnt_name" class="col-lg-2 control-label">Full Name</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" name="cnt_name" id="cnt_name" placeholder="Full Name">
			    </div>
			   </div>
			  <div class="form-group">
			    <label for="cnt_email" class="col-lg-2 control-label">Email</label>
			    <div class="col-lg-9">
			      <input type="email" class="form-control" id="cnt_email" placeholder="Email Adress">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg_subject" class="col-lg-2 control-label">Subject</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" id="cnt_msg_subject" name="cnt_msg_subject" placeholder="Message Subject">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg" class="col-lg-2 control-label">Message</label>
			    <div class="col-lg-9">
			    <textarea class="form-control" name="cnt_msg" id="cnt_msg" rows="7"></textarea>
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
 				<div class="panel panel-info">
 					<div class="panel-heading">My Address</div>
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
                                         <label>Email:</label><a href="mailto:stocks.oliver@gmail.com">stocks.oliver@gmail.com</a><br/>
                                         <label>CV: </label><a href="#"> Download PDF version</a>
								</address>
					</div>
 					</div>
 			</div>
</div>