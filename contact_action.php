<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$explanation = filter_var($_POST['explanation'], FILTER_SANITIZE_STRING);

$email = "
Hello BitRocket Labs,
You have a new inquiry!
Name: $name <$email>
Text: $explanation

See you later,
BRL Bot";

mail ('hi@bitrocketlabs.com' , "New Inquiry from $name" , $email);

header("Location: /");
 ?>
