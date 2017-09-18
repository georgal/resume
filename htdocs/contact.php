<?php
/* e-mail recipient */
$myemail  = "george.georgalidis@gmail.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['name']);
$email    = check_input($_POST['mail']);
$subject  = 'Resume contact form';
$textfield = check_input($_POST['message']);

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email

Message:
$textfield

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if(($problem && strlen($data) == 0)!=1)
    {
        return $data;
    }
}


?>
