<?php

require_once 'vendor/autoload.php';
require_once 'credentials.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))

//original transporter
//$transport = (new Swift_SmtpTransport('mail.csotech.com.ng', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

//<a href="http://greentech.csotech.com.ng/register/index.php?token=' . $token. '"> Verify email</a>
function sendVerificationEmail($userEmail, $token){

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
            
            <p style="font-family: lora, Merriweather">Hello Username you are almost ready to join us at greentech, please click the link below to verify your Email address.</p>
            
            <a href="http://localhost/register/index.php?token=' . $token. '" style="color: white; background: #ffb020; padding: 15px 20px; border-radius: 5px; text-decoration: none; display: block; margin-top: 25px; font-family: lora, Merriweather">Verify Email</a>
        
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
        <title>Verify</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Please click on the link below to recover your password
            </p>
            <a href="http://localhost/register/index.php?password-token=' . $token. '"> Recover password</a>
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


function executeQuery($sql, $data){

    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = []){

    global $conn;

    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else{
        $i = 0;

        foreach($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql." WHERE $key=?";
            }
            else{
                $sql = $sql." AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}



function selectOne($table, $conditions){

    global $conn;

    $sql = "SELECT * FROM $table";

        $i = 0;

    foreach($conditions as $key => $value){
        if ($i === 0){
            $sql = $sql." WHERE $key=?";
        }
        else{
            $sql = $sql." AND $key=?";
        }
        $i++;
    }

    $sql = $sql. " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}


function calculateDeposits($column, $table, $id){

    global $conn;

    $deposits = "SELECT $column FROM $table WHERE user_idd = $id AND type = 'deposit' AND status = 'approved' OR 'completed' ";
    $results = mysqli_query($conn, $deposits);
    $totalDeposits = 0;
    while($row = mysqli_fetch_assoc($results)){
        $totalDeposits += $row['amount'];

    }

    return $totalDeposits;
}


function calculateCashouts($column, $table, $id){

    global $conn;

    $cashouts = "SELECT $column FROM $table WHERE user_idd = $id AND type = 'cashout' AND status = 'approved' OR user_idd = $id AND type = 'cashout' AND status = 'completed'";
    $results = mysqli_query($conn, $cashouts);
    $totalCashouts = 0;
    while($row = mysqli_fetch_assoc($results)){
        $totalCashouts += $row['amount'];

    }
    return $totalCashouts;
    
}

function calculateBalance($column, $table, $id){

    global $conn;

    $deposits = "SELECT $column FROM $table WHERE user_idd = $id AND type = 'deposit' AND status = 'approved'  OR user_idd = $id AND type = 'ref_bonus' AND status = 'approved'";
    $results = mysqli_query($conn, $deposits);
    $totalDeposits = 0;
    while($row = mysqli_fetch_assoc($results)){
        $totalDeposits += $row['amount'];

    }

    return $totalDeposits;
    
}

function calculateRefs($column, $table, $id){

    global $conn;

    $deposits = "SELECT $column FROM $table WHERE user_idd = $id AND type = 'ref_bonus' AND status = 'approved' OR 'completed' ";
    $results = mysqli_query($conn, $deposits);
    $totalDeposits = 0;
    while($row = mysqli_fetch_assoc($results)){
        $totalDeposits += $row['amount'];

    }

    return $totalDeposits;
}

?>