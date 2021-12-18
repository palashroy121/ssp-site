<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $emailSubject= $_POST['subject'];
    $message= $_POST['message'];
    $to = "palash.cmt@gmail.com";
    $subject = $emailSubject;
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@bdinformer.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:index.html");
?>