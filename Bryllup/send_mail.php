<?php
$base = "http://kildetoft.dk/Bryllup/?";
$body = "Mail sendt fra kildetoft.dk\n\n";
foreach($_POST as $key => $val) {
  $body= $body. "$key = ";
  $body= $body. "$val\n";
}
$mail_send = mail("bryllup@kildetoft.dk", 
		  "Bryllups mail",
		  $body,
		  "From: webmaster@kildetoft.dk");

if ($mail_send) {
  $base .= "mailsend.html";
} else {
  $base .= "mailerror.html";
}

# Tid til at lave log-oplysninger ..
$body .= "\n\n\n";

foreach($_SERVER as $key => $val) {
  $body= $body. "$key = ";
  $body= $body. "$val\n";
}


$mail_send = mail("brylluplog@kildetoft.dk", 
		  "Bryllups mail",
		  $body,
		  "From: webmaster@kildetoft.dk");

  header("Location: ".$base);
?>