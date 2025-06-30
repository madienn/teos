<?php

$name = $_POST['name'];
$email = $_POST['email'];


$fileHandle = fopen("subscribedatabase.txt",'a');

fwrite($fileHandle, $name.",".$email."\n");

fclose($fileHandle);

echo "Thank you for subscribing to our newsletter!";

?>