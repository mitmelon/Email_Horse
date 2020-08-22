<?php
require_once __DIR__."/vendor/autoload.php";

$mail = new Email_Horse();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= TRUE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('from@email.com');

// Email to check/validate
$email = 'email@example.com'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif($mail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
} 