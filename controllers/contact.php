
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

	require __DIR__ . '/../phpMailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;

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
	$mail->Username = "fees.de.celestia@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "websitefeesdecelestia";
	//Set who the message is to be sent from
	$mail->setFrom($_POST['cnt_email'], $_POST['cnt_name']);
	//Set an alternative reply-to address
	$mail->addReplyTo($_POST['cnt_email'], $_POST['cnt_name']);
	//Set who the message is to be sent to
	$mail->addAddress('stocks.oliver@gmail.com', 'Stocks Oliver');
	//Set the subject line
	$mail->Subject = 'WEBSITE: '. $_POST['cnt_msg_subject'];
	//Replace the plain text body with one created manually
	$mail->msgHTML($_POST['cnt_msg']);
	$mail->AltBody = $_POST['cnt_msg'];

	//send the message, check for errors
	if (!$mail->send()) {
		//log this erros somewhere else in the production version
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Thanks for you message. We will get in touch as soon as possible.";
	}
}
?>


