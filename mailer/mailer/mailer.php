
<?php

function sendVerification($email, $username, $password){

  require_once('../class.phpmailer.php');
  //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

  $mail->IsSMTP(); // telling the class to use SMTP

  try {
    $mail->Host       = "amcorassets.com"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "admin@amcorassets.com"; // SMTP account username
    $mail->Password   = "informative";        // SMTP account password
    $mail->AddReplyTo('admin@amcorassets.com', 'First Last');
    $mail->AddAddress($email, '');
    $mail->SetFrom('admin@amcorassets.com', 'Amcor First');
    $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
    $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
    $mail->Body   = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User Registration</title>
        
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Dosis&family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
        
    </head>
    <body style="background: #e8e8e8; font-family: "lora", "dosis", sans-serif;">
    
    <div style="background: white; width: 95vw; max-width: 600px; height: 330px; margin: 0px">
        <div style="height: 30px;">
            <h1 style="margin: 0px\; width: 90%; text-align: left; padding-top: 0px; color: white; "><img src="https://expressfxt.com/img/logo.png" width="130px" style=" padding: 10px;"></h1>
        </div>
        
        <div style=" padding: 40px 20px 0px 20px; text-align: left; width: 90%; font-size: 1em; margin: auto;">
            
            <p>Hello '. $username . ',<br> Your registration was successful. Below are you Login details. Please keep it safe. </p>
            <p>Email: '. $email . '</p>
            <p>Password: '. $password . '</p>
            <br>
            <p>Kind Regards,</p>
            <p>ExpressFxt.</p>
            
            
        </div>
    </div>
        
        <img height="" style="display: block;  width: 95vw; max-width: 600px; margin: auto" src="https://expressfxt.com/img/hero_1.jpg">
    
    <div style=" width: 90vw; max-width: 600px; text-align: center; margin:0px auto">
        <h3 style="font-family: "Merriweather"">Stay in touch</h3>
        
        <p style="padding-bottom: 20px; margin-bottom: 30px;">Copyright &copy; Expressfxt, All rights reserved.</p>
    </div>
    
</body>
</html>';
    $mail->Send();
    echo "Message Sent OK</p>\n";
  } 

  catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
  } catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
  }

}


sendVerification('oschukwuebuka@gmail.com', '22/02/2021', 'emmanuel');

?>