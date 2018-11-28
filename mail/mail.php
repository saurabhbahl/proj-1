 <?php

	// $headers .= "Reply-To:patelvikisha211@gmail.com";
	$subject = "My subject";
	$txt = "Hello world!";
	// $headers .= "From: patelvikisha211@gmail.com" . "\r\n" .
	// "CC: patelvikisha211@gmail.com";
	// mail($to,$subject,$txt,$headers);

$to .= "Reply-To: rrjunkk@gmail.com\r\n";	
$headers = "From:patelvikisha211@gmail.com\r\n";
$headers .= "Return-Path: patelvikisha211@gmail.com\r\n";


if ( mail($to,$subject,$txt,$headers) ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }
?>
 
