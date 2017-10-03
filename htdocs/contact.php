<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;
$mailgun = new Mailgun('key-274c0454bfb273b534863c15435be750', new \Http\Adapter\Guzzle6\Client());

# Make the call to the client.
$result = $mgClient->sendMessage("sandbox8e91abbdc2b840a0aecbea08172c53e7.mailgun.org",
  array('from'    =>  name,
        'to'      => 'Mailgun Devs <devs@mailgun.net>',
        'subject' => 'Resume Form',
        'text'    => message));
?>
