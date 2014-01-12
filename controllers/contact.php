<?php // Script to process contact message information
  		
  		/*
  			TO DO
			[ ] create  mechanism to ensure that script is not sent twice
			[ ] Add a marker to the map
		*/
	
  			$alert_msg = "";   //Store the success or failure message in the alert box
  			$valid = TRUE; // Boolean value to detect if data collected in form is valid

  			if(isset($_POST['submit']))
  			{
	 			function died($error) {
	 				global $alert_msg;
	 				global $alert_class;
	 				global $valid;
					$alert_msg .= "<div class='alert alert-danger'>Désolé, mais nous n'avons pas reçu votre message pour la raison  suivante:<br/> ";
					$alert_msg .= "<ul>";
					$alert_msg .= $error;
					$alert_msg .= "</ul></div>";
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
					require './phpMailer/PHPMailerAutoload.php';

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
					$mail->addAddress('stocks.oliver@gmail.com', 'Elevage Website');
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
					  $alert_msg = "<div class='alert alert-danger'>
					  				Votre message a été reçu avec succès et nous reviendrons vers vous dès que possible</div>";
					  $valid = FALSE; // This is to ensure that form data values are not filled
					}
	  			}
	  		}
  		?>