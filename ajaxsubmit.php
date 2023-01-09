<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];

    $to = $_POST['email'];
    $subject = "This is subject";
    
    $message = "<b>This is HTML message.</b>";
    $message .= "<h1>This is headline.</h1>";
    
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Cc:def@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true ) {
        echo "Message sent successfully...";
    }else {
        echo "Message could not be sent...";
    }
?>