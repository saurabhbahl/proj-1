<?php
 
	   $subject = "msg";
	$txt = "hello hw r u??";
	$to = "Reply-To:patelvikisha211@gmail.com\r\n";	
	$headers = "From:patelsushant7@gmail.com\r\n";
	$headers .= "Return-Path: patelvikisha211@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n"; 

	if ( mail($to,$subject,$txt,$headers) )
	   {
			echo "The email has been sent!";
	   } 
	   else 
	   {
			echo "The email has failed!";
	   }
?>
 