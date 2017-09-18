<?php
/* e-mail recipient */
$to  = "george.georgalidis@gmail.com";
$subject  = 'Resume contact form';


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email

Message='Hi there';

/* Send the message using mail() function */
mail($to, $subject, $message);

?>
