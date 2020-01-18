# Email_Horse v1.0.0

Email Horse is an email validation class to verify the presence of email.
The Email_Horse class is used to check if an email address is valid and real using SMTP protocol in PHP. You need to use one function of Email_Horse class to verify the email address in PHP.

Email_Horse Does the followings

1) Validate the format of the email address.
2) Get MX records of the domain of the email address.
3) Connect to the SMTP server by the MX records.
4) Check if given recipient email address is valid.
5) Check if the user of email's domain exists.

## Class Usage :

```php
require_once __DIR__."/vendor/autoload.php";

// Initialize library class
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
```
## Fture Updates :
Future Updates (v1.0.1) will contain

1) Email Tracking for open or read
2) Send Secured Email including with attachments using templates
3) Send Marketing Emails
4) Automate Email Sending

# License

Released under the MIT license