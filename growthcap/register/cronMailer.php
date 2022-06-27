<?php

define("EMAIL", 'info@growthcapassets.com');
define("PASSWORD", 'yagination12');

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('growthcapassets.com', 465, 'ssl'))

  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
; 
 
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function sendInterestEmail($userEmail, $username, $plan, $amount){

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
            <h1 style="margin: 0px ; width: 90%; padding-top: 0px; color: white; "><img src="https://Growthcapassets.com/img/logo.png" width="130px" style=" padding: 10px;"></h1>
        </div>
        
        <div style=" padding: 40px 20px 10px 20px; width: 90%; margin: 0px">
            
            <p>Hello '. $username . ',</p>
            <p>This is to notify you of a new return on investment (ROI) on your investment account.</p>
            
            <p>ROI information:</p>
            
            <p>Plan : '. $plan .' </p>
            <p>Amount: $'. $amount .'</p>
            <br> <br>
            
            <p>Kind Regards, </p>
            <p>GrowthCap Assets. </p>
            
            
        </div>
    </div>
        
        
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Growthcapassets, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('NEW ROI'))
    ->setFrom('info@growthcapassets.com', 'GrowthCap Assets')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


function sendEndPlan($userEmail, $username, $plan, $amount){

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
            <h1 style="margin: 0px ; width: 90%; padding-top: 0px; color: white; "><img src="https://Growthcapassets.com/img/logo.png" width="130px" style=" padding: 10px;"></h1>
        </div>
        
        <div style=" padding: 40px 20px 10px 20px; width: 90%; margin: 0px">
            
            <p>Hello '. $username . ',</p>
            <p>This is to notify you that your investment package ('. $plan .' Package) has been completed and your capital has been added to your account for withdrawal.</p>
            
            <p>ROI information:</p>
            
            <p>Plan : '. $plan .' </p>
            <p>Amount: $'. $amount .'</p>
            <br> <br>
            
            <p>Kind Regards, </p>
            <p>GrowthCap Assets. </p>
            
            
        </div>
    </div>
        
        
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Growthcapassets, All rights reserved.</p>
    </div>
    
</body>
</html>';

    // Create a message
    $message = (new Swift_Message('END PLAN'))
    ->setFrom('info@growthcapassets.com', 'GrowthCap Assets')
    ->setTo([$userEmail])
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);

}


?>