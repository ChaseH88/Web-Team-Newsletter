<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'goldfinger.php';



//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'televox17@gmail.com';                 // SMTP username
    $mail->Password = 'Telepass!7';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

	/*
$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => true,
        'verify_depth' => 3,
        'allow_self_signed' => true,
        'peer_name' => 'smtp.example.com',
        'cafile' => '/etc/ssl/ca_cert.pem',
    ],
);
	*/
	
    //Recipients
    $mail->setFrom('noreply@televox.com', 'Televox');
				//$mail->addAddress('sharrison@west.com');
				$mail->addAddress('web-dev@west.com');
				$mail->addAddress('sdeasterling@west.com');
				$mail->addAddress('tljung@west.com');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Newsletter Feedback - ' . $Edition;
    $mail->Body    = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>HTML email</title>
</head>
<body>
  <div id="header">
    <div class="container"><h1 style="color: #0092D1; font-family: Trebuchet MS, Helvetica, sans-serif">Newsletter Feedback - ' . $Edition . '</h1></div>
  </div>
  <div id="content">
		<div class="row" style="padding: 5px 0;">
      <span class="info" style="color: color: #5c6163;">Name: <strong>' . $Name . '</strong></span>
    </div>
			<div class="row" style="padding: 5px 0;">
      <span class="info" style="color: color: #5c6163;">Email: <strong>' . $Email . '</strong></span>
    </div>
				<div class="row" style="padding: 5px 0;">
      <span class="info" style="color: color: #5c6163;">Rating: <strong>' . $Rating . ' out of 10</strong></span>
    </div>
				<div class="row" style="padding: 5px 0;">
      <span class="info" style="color: color: #5c6163;">Comments: <strong>' . $comments . '</strong></span>
    </div>
  </div>
</body>
</html>
';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //'Message has been sent';
	
	
	header('Location: target-page.php');
     exit();
	
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}