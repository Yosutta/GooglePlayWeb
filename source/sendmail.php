<?php

$email = "phuphuongtin@gmail.com";
$code= "DUHKA";

function sendCodeByMail($email,$code){

    $subject = "Googleplay Project has just sent an email verification code";

    $body = "Your verification code is : ".$code;

    $headers = "From: Verification code";

    if (mail($email, $subject, $body, $headers)) {
        echo "Email successfully sent to $email...";
    } 
    else {
        echo "Email sending failed...";
    }
}

sendCodeByMail($email,$code);
?>