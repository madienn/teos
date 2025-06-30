<?php
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $acode = $_POST['acode'];
    $pnumber = $_POST['pnumber'];
    $apostion = $_POST['apostion'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $attachment = $_POST['attachment'];
        
    $fileHandle = fopen("careerapplications.txt",'a');

fwrite($fileHandle, $fname.",".$mname.",".$lname.",".$address1.",".$address2.",".$city.",".$state.",".$zip.",".$email.",".$acode.",".$pnumber.",".$apostion.",".$day.",".$month.",".$year.",".$attachment."\n");

fclose($fileHandle);

echo "Thank you for your application! Our HR office will process and contact you with regards to it.";
?>