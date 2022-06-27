<?php

define("EMAIL", 'info@travelquick.uk');
define("PASSWORD", 'travelquicker');

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('mail.travelquick.uk', 465, 'ssl'))

  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

//<a href="http://greentech.csotech.com.ng/register/signin.php?token=' . $token. '"> Verify email</a>
function sendVerificationEmail($userEmail, $token, $userName){

    global $mailer;
    $body='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verfication</title>
    
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    
</head>
<body style="background: #e8e8e8; font-family: sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 370px; margin: 30px auto 50px auto">
        <div style="height: 110px; background: #1a69d4;">
            <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 30px; color: white; ">Greentech</h1>
        </div>
        
        <div style=" padding: 10px 20px; text-align: center; width: 90%; margin: auto;">
            <h2 style="font-weight: normal; font-family: lora, Merriweather">Email Confirmation</h2>
            
            <p style="font-family: lora, Merriweather">Hello ' . $userName. ' you are almost ready to join us at greentech, please click the link below to verify your Email address.</p>
            
            <a href="http://localhost/register/signin.php?token=' . $token. '" style="color: white; background: #ffb020; padding: 15px 20px; border-radius: 5px; text-decoration: none; display: block; margin-top: 25px; font-family: lora, Merriweather">Verify Email</a>
        
        </div>
    </div>
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: Merriweather">Stay in touch</h3>
        <p style="margin-top: 0px;">
            <a href="https://twitter.com" style=" font: 1.1em;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://wa.me/+13478993600">
                <i class="fab fa-whatsapp"></i>
            </a>
        </p>
        <p style="font-family: lora, Merriweather; margin-bottom: 20px;">Copyright &copy; Grentech, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('Verify your Email Address'))
    ->setFrom([EMAIL])
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

};


//THIS CODE SENDS THE PASSWORD RECOVERY LINK

//<a href="http://greentech.csotech.com.ng/register/index.php?password-token=' . $token. '"> Recover password</a>
function sendPasswordResetLink($userEmail, $token){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Password Recovery</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Please click on the link below to recover your password
            </p>
            <a href="http://localhost/register/signin.php?password-token=' . $token. '"> Recover password</a>
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