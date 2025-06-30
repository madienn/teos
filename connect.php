<?php
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
        
    $conn = new mysqli('localhost','root12','555551','contact_us_teos');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into message(name, company, email, subject, msg)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$name,$company,$email,$subject,$msg);
        $stmt->execute();
        echo "Thank you! Your message was sent successfully!";
        $stmt->close();
        $conn->close();
    }
?>