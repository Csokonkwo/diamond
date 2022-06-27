<?php

define("EMAIL", 'admin@mywealthseries.com');
define("PASSWORD", 'mywealtherboy');

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('mywealthseries.com', 465, 'ssl'))

  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
; 
 
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


//THIS CODE SENDS THE PASSWORD RECOVERY LINK

function sendPasswordResetLink($userEmail, $token){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Password Recovery</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 300px; margin: 10px auto 50px auto">
        <div style="height: 60px;">
            <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 20px; color: white; "><img src="https://mywealthseries.com/img/logo.png" width="120px"></h1>
        </div>
        
        <div style=" padding: 10px 20px; text-align: center; width: 90%; margin: auto;">
            <h2 style="font-weight: normal;">Recover Password</h2>
            
            <p>Hello, If you did not initiate a recover password process please ignore, otherwise, you are almost ready to recover your account, please click the link below, Thank you.</p>
            
            <a href="https://mywealthseries.com/register/signin.php?password-token=' . $token. '"style="color: white; background: green; padding: 15px 20px; border-radius: 5px; text-decoration: none; display: block; margin-top: 25px;"> Recover Password </a>
        
        </div>
    </div>
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Mywealth Series, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('Password Recovery'))
    //$from = array('admin@mywealthseries.com');
    ->setFrom('admin@mywealthseries.com', 'Mywealth Series')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


function sendCashoutConfirm($userEmail, $username, $amount){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cashout notification</title>
        
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 220px; margin: 0px auto 0px auto">
        <div style="height: 30px;">
            <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 0px; color: white; "><img src="https://mywealthseries.com/img/logo.png" width="120px"></h1>
        </div>
        
        <div style=" padding: 20px 20px; text-align: center; width: 90%; margin: auto;">
            
            <p>Hello '. $username . ', this is to notify you that your cashout of $' . $amount . ' has been paid to your specified wallet. Thank you.</p>
            
            
        </div>
    </div>
        
        <img height="" style="display: block;  width: 95vw; max-width: 600px; margin: auto" src="https://mywealthseries.com/img/hero_1.jpg">
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Mywealth Series, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('Cashout Notification'))
    ->setFrom('admin@mywealthseries.com', 'Mywealth Series')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}

function sendVerification($userEmail, $username, $password){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User Registration</title>
        
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 330px; margin: 0px">
        <div style="height: 30px;">
            <h1 style="margin: 0px\; width: 90%; text-align: left; padding-top: 0px; color: white; "><img src="https://mywealthseries.com/img/logo.png" width="130px" style=" padding: 10px;"></h1>
        </div>
        
        <div style=" padding: 40px 20px 0px 20px; text-align: left; width: 90%; font-size: 1em; margin: auto;">
            
            <p>Hello '. $username . ',<br> Your registration was successful. Below are you Login details. Please keep it safe. </p>
            <p>Email: '. $userEmail . '</p>
            <p>Password: '. $password . '</p>
            <br>
            <p>Kind Regards,</p>
            <p>mywealthseries.</p>
            
            
        </div>
    </div>
        
        <img height="" style="display: block;  width: 95vw; max-width: 600px; margin: auto" src="https://mywealthseries.com/img/hero_1.jpg">
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Mywealth Series, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('Member Registration'))
    ->setFrom('admin@mywealthseries.com', 'Mywealth Series')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


function sendMessage($userEmail, $fullname, $email, $message){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cashout notification</title>
        
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 220px; margin: 0px auto 0px auto">
        <div style="height: 30px;">
            <h1 style="margin: 0px auto; width: 90%; text-align: center; padding-top: 0px; color: white; "><img src="https://mywealthseries.com/img/logo.png" width="120px"></h1>
        </div>
        
        <div style=" padding: 0px 20px; text-align: center; width: 90%; margin: auto;">
            
            <p>Hello Admin, i am '. $fullname . ', and i can be contacted via '  . $email . '. <br> ' . $message. '
                
            </p>
            
        </div>
    </div>
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Sent from mywealthseries</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Mywealth Series, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('New Message'))
    ->setFrom('admin@mywealthseries.com', 'Mywealth Series')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


function sendNFP($userEmail, $username, $amount, $date){

    global $mailer;
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Notification</title>
        
     <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

        
    </head>
    <body style="background: #e8e8e8; font-family: "Roboto condensed";">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 430px; margin: 0px auto 0px auto">
        <div style="height: 30px;">
            <h1 style="margin: 0px ; width: 90%; padding-top: 0px; color: white; "><img src="https://mywealthseries.com/img/logo.png" width="130px" style=" padding: 10px;"></h1>
        </div>
        
        <div style=" padding: 40px 20px 10px 20px; width: 90%; margin: 0px">
            
            <p>Hello '. $username . ',</p>
            <p>This is to notify you that your daily NFP PROFIT has just been added to your account..</p>
            
            <p>ROI information:</p>
            
            <p>Amount: $'. $amount .'</p>
            <p>Date: '. $date .'</p>
            <br> <br>
            
            <p>Kind Regards, </p>
            <p>mywealthseries. </p>
            
            
        </div>
    </div>
        
        
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Mywealth Series, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('NFP PAYROLL'))
    ->setFrom('admin@mywealthseries.com', 'Mywealth Series')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


?>