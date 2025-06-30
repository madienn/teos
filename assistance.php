<?php

$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$state = $_POST['state'];
$zip = $_POST['zip'];


$fileHandle = fopen("subscribedatabase.txt",'a');

fwrite($fileHandle, $name.",".$lname.",".$email.",".$state.",".$zip."\n");

fclose($fileHandle);

echo "Thank you for subscribing to our newsletter!";

?>