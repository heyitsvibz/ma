<?php

//100% working
$NAME=$_POST['name1'];
$PHONE=$_POST['phone1'];
$PINC=$_POST['pinc1'];
$STATE=$_POST['state1'];
$MAIL2=$_POST['mail2'];

 function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }


$to      = 'moaesic@gmail.com';
$subject = "Membership request for ".clean_string($NAME)."\n";
//$message = "hi";
$message .= "First Name: ".clean_string($NAME)."\n"."Contact Number :".clean_string($PHONE)."\n"."Pincode :".clean_string($PINC)."\n"."State :".clean_string($STATE)."\n"."Email :".clean_string($MAIL2)."\n";




$headers = 'From: membership-request@moaesic.com' . "\r\n" .
    'Reply-To: webmaster@solar.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?> 