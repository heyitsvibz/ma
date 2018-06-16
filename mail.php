<?php


$NAME=$_POST['name1'];
// $PHONE=$_POST['phone1'];
// $PINC=$_POST['pinc1'];
// $STATE=$_POST['state1'];
// $MAIL=$_POST['mail1']

 function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

//$to      = 'heyitsvibz@gmail.com';
$to      = 'moaesic@gmail.com';
$subject = "Quote for ".clean_string($NAME)."\n";
$message = "hi";
//$message .= "First Name: ".clean_string($NAME)."\n"."Contact Number :".clean_string($PHONE)."\n"."Pincode :".clean_string($PINC)."\n"."State :".clean_string($STATE)."\n";




$headers = 'From: ddfddfd@sheoransolar.com' . "\r\n" .
    'Reply-To: webmaster@solar.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?> 