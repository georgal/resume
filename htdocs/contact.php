# Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-274c0454bfb273b534863c15435be750');
$domain = "sandbox8e91abbdc2b840a0aecbea08172c53e7.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
  array('from'    => 'Excited User <excited@samples.mailgun.org>',
        'to'      => 'Mailgun Devs <devs@mailgun.net>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));
