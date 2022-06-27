<?php

define("EMAIL", 'info@csotech.com.ng');
define("PASSWORD", 'csotechsender');

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('mail.csotech.com.ng', 465, 'ssl'))

  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function sendVerificationEmail($userEmail, $token, $userName){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Verfication</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
        
        <div style="background: white; width: 95vw; max-width: 600px; height: 280px; margin: 10px auto 50px auto">
            <div style="height: 60px;">
                <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 20px; color: white; "><img src="https://csotech.com.ng/img/cso.png" width="120px"></h1>
            </div>
            
            <div style=" padding: 10px 20px; text-align: center; width: 90%; margin: auto;">
                <h2 style="font-weight: normal;">Email Confirmation</h2>
                
                <p>Hello ' . $userName. ' you are almost ready to join us at Csotech, please click the link below to verify your Email address, Thank you.</p>
                
                <a href="https://blog.csotech.com.ng/register/signin.php?token=' . $token.'" style="color: white; background: green; padding: 15px 20px; border-radius: 5px; text-decoration: none; display: block; margin-top: 25px;">Verify Email</a>
            
            </div>
        </div>
        
        <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
            <h3 style="font-family: "Merriweather" ">Stay in touch</h3>
            <p style="margin-top: 0px;">
                <a href="https://twitter.com/csotech" style=" font: 1.1em;">
                <img src="https://csotech.com.ng/img/twitter.png" width="20px">
            </a> 
            <a href="https://wa.me/+2348065619176">
                <img src="https://csotech.com.ng/img/whatsapp.png" width="19px">
            </a>
            </p>
            <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Csotech, All rights reserved.</p>
        </div>
        
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Email verification'))
    ->setFrom([EMAIL])
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

};


//THIS CODE SENDS THE PASSWORD RECOVERY LINK

function sendPasswordResetLink($userEmail, $token){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Password Recovery</title>
        
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 290px; margin: 10px auto 50px auto">
        <div style="height: 60px;">
            <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 20px; color: white; "><img src="https://csotech.com.ng/img/cso.png" width="120px"></h1>
        </div>
        
        <div style=" padding: 10px 20px; text-align: center; width: 90%; margin: auto;">
            <h2 style="font-weight: normal;">Recover Password</h2>
            
            <p>Hello, If you did not initiate a recover password process please ignore, otherwise, you are almost ready to recover your account, please click the link below, Thank you.</p>
            
            <a href="https://blog.csotech.com.ng/register/signin.php?password-token=' . $token.'" style="color: white; background: green; padding: 15px 20px; border-radius: 5px; text-decoration: none; display: block; margin-top: 25px;">Recover Password</a>
        
        </div>
    </div>
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        <p style="margin-top: 0px;">
            <a href="https://twitter.com/csotech" style=" font: 1.1em;">
                <img src="https://csotech.com.ng/img/twitter.png" width="20px">
            </a> 
            <a href="https://wa.me/+2348065619176">
                <img src="https://csotech.com.ng/img/whatsapp.png" width="19px">
            </a>
            
        </p>
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Csotech, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('Password recovery'))
    ->setFrom([EMAIL])
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}



?>