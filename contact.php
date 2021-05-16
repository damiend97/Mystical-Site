<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = htmlspecialchars($_POST['message']);

$subject = "hello from $name";

$msg = "
Name : $name\n
Email : $email\n
Message : $message\n
";

$msg = wordwrap($msg,70);

mail("durandamien1997@gmail.com",$subject,$msg);

header('Location: http://durandev.net/mystical/response.html');

die();

?>