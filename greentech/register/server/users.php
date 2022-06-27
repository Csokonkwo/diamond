<?php

session_start();

require 'dbConnect.php';
require 'dbFunctions.php';

$errors =array();
$username = '';
$email = '';
$user = '';
$verified = '';

$amount = '';
$transAdd = '';

//CODINGS FOR SIGING USERS UP GOES HERE

if(isset($_POST['sign_up'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $referrer_id = $_POST['referrer_id'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];


    //validation

    if(empty($username)){
        $errors['username'] = "Username is Required";
    }

    if(strlen($username) < 4){
        $errors['username'] = "Username must contain atleast 4 characters";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email Address is invalid";
    }

    if(empty($email)){
        $errors['email'] = "Email is Required";
    }

    if(empty($password)){
        $errors['password'] = "Password is Required";
    }

    if(strlen($password) < 6){
        $errors['password'] = "Password must contain atleast 6 characters";
    }

    if($password != $password_2){
        $errors['password'] = "The two password do not match";
    }


    $emailQuery = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('ss', $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userDetail = $result->fetch_assoc();
    $stmt->close();

    if($userDetail['username'] === $username){
        $errors['username'] = "Username already exists";
    }

    if($userDetail['email'] === $email){
        $errors['email'] = "Email already exists";
    }

    //CHANGES WAS MADE HERE TO STOP TWO USERS USING THE SAME USERNAME

    if (count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO users (username, email, verified, token, password, referrer_id) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbsss', $username, $email, $verified, $token, $password, $referrer_id);
        if($stmt->execute()){

            //Login user
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;
            $_SESSION['token'] = $token;
            $_SESSION['referrer_id']= $referrer_id;

            sendVerificationEmail($email, $token);

            //Flash message

            $_SESSION['message'] = "Registration Successful";
            $_SESSION['alert-class'] = "alert-success";

            header("location: index.php");
            exit();
        }
        else{
            $errors['db_error'] = "Failed to register";
        }
    }

}



//THIS CODINGS COME UP WHEN A USER IS ABOUT TO LOGIN

if(isset($_POST['sign_in'])){

    $user = $_POST['user'];
    $password = $_POST['password'];


    //validation

    if(empty($user)){
        $errors['user'] = "Username or Email is Required";
    }

    if(empty($password)){
        $errors['password'] = "Password is Required";
    }

    if(strlen($password) < 6){
        $errors['password'] = "Password must contain atleast 6 characters";
    }

    if(count($errors)===0){

        $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $user, $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $userDetail = $result->fetch_assoc();
    
        if(password_verify($password, $userDetail['password'])){
    
            //login accessed
            $_SESSION['id'] = $userDetail['id'];
            $_SESSION['username'] = $userDetail['username'];
            $_SESSION['email'] = $userDetail['email'];
            $_SESSION['verified'] = $userDetail['verified'];
            $_SESSION['created_at'] = $userDetail['created_at'];
            $_SESSION['token'] = $userDetail['token'];
            $_SESSION['referrer_id']= $userDetail['referrer_id'];
    
            //Flash message
    
            $_SESSION['message'] = "Login Successful";
            $_SESSION['alert-class'] = "alert-success";
    
            header("location: index.php");
            exit();
        }
    
        else{
            $errors['Login_fail'] = "Wrong Credentials";
        }

    }
   
}


//THIS CODINGS LOGS THE USER OUT

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    unset($_SESSION['referrer_id']);
    header('location: signin.php');

    exit();
}


//THIS CODINGS CHANGES THE VERIFICATION STATUS OF THE USER

function verifyUser($token){
    global $conn;
    $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        $update_query = "UPDATE users SET verified=1 WHERE token = '$token'";

        if(mysqli_query($conn, $update_query)){

            //Log user in

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = 1;
            $_SESSION['email'] = $user['referrer_id'];
            $_SESSION['email'] = $user['created_at'];
    
            //Flash message
    
            $_SESSION['message'] = "Your email has been verified successfully";
            $_SESSION['alert-class'] = "alert-success";
    
            header("location: index.php");
            exit();
        }

        else {
            echo 'User not found';
        }
    }
}


//FORGOTTEN PASSWORD CODING HERE

if(isset($_POST['forgot_password'])){

    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email Address is invalid";
    }

    if(empty($email)){
        $errors['email'] = "Email is Required";
    }

    if(count($errors) === 0){

        $sql = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $userDetail = $result->fetch_assoc();
        $userCount = $result->num_rows;
        $token = $userDetail['token'];
        $stmt->close();

        if($userCount < 1){
            $errors['email'] = "User does not exist";
        }

        if(count($errors)===0){
            sendPasswordResetLink($email, $token);
            header('location: password_message.php');
            exit(0);

        }
    }

}

if(isset($_POST['update_password'])){
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];

    //Validation

    if(empty($password)){
        $errors['password'] = "Password is Required";
    }

    if(strlen($password) < 6){
        $errors['password'] = "Password must contain atleast 6 characters";
    }

    if($password != $password_2){
        $errors['password'] = "The two password do not match";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    if(count($errors)===0){

        $sql = "UPDATE users SET password='$password' WHERE email='$email'";
        
        $result = mysqli_query($conn, $sql);
        
        if($result){
            header('location: signin.php');
            exit(0);
        }
    }
}

function updatePassword($token){

    global $conn;
    $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];
    header('location: update_password.php');
    exit(0);
}



//DEPOSIT CODINGS GOES HERE


if(isset($_POST['deposit_funds'])){

    unset($_POST['deposit_funds']);

    $amount = $_POST['amount'];
    $transAdd = $_POST['transAdd'];
    $user_idd = $_SESSION['id'];
    $type = "deposit";
    $status = "pending";

    if(strlen($amount) < 2){
        $errors['amount'] = "Invalid amount";
    }

    if(strlen($transAdd) < 2){
        $errors['transAdd'] = "Invalid Transaction Hash";
    }

    //Check transaction Hash
    $transAddQuery = selectOne('transactions', ['transAdd'=> $transAdd]);

    if($transAddQuery['transAdd'] ===  $transAdd){
        $errors['transAdd'] = "Transaction Hash already exists";
    }

    //Check if you have a pending deposit
    $transAddQuery_2 = selectOne('transactions', ['user_idd'=> $user_idd, 'type'=> $type, 'status'=> $status ]);

    if($transAddQuery_2['status'] ===  $status){
        $errors['transAdd'] = "You have a pending Deposit";
        $_SESSION['message'] = "You already have a pending Deposit";
        $_SESSION['alert-class'] = "alert-success";
        header("location: index.php");
        exit();
    }

    if (count($errors) === 0){

        //Add to your referrer if its your first deposit
        $firstDeposit = selectOne('transactions', ['user_idd'=> $user_idd, 'type'=> 'deposit']);
        
        if(!$firstDeposit){

            $referrer_amount = (0.1 * $amount);
            $ref_type = 'ref_bonus';

            $sql = "INSERT INTO transactions (user_idd, amount, status, type, transAdd)
            VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('idsss', $_SESSION['referrer_id'], $referrer_amount, $status, $ref_type, $user_idd);
            $stmt->execute();

        }

        $sql = "INSERT INTO transactions (user_idd, amount, status, type, transAdd) 
        VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('idsss', $user_idd, $amount, $status, $type, $transAdd);
        
        if($stmt->execute()){

            //Flash message
            $_SESSION['message'] = "Deposit request sent";
            $_SESSION['alert-class'] = "alert-success";

            header("location: index.php");
            exit();
        }

        else{
            $errors['db_error'] = "Database error : Failed to place deposit";
        }
    }

}


//WITHDRAWAL CODE GOES HERE

if(isset($_POST['withdraw_funds'])){

    unset($_POST['withdraw_funds']);

    $amount = $_POST['amount'];
    $transAdd = $_POST['transAdd'];
    $user_idd = $_SESSION['id'];
    $type = "cashout";
    $status = "pending";

    if(strlen($amount) < 2){
        $errors['amount'] = "Invalid amount";
    }

    if(strlen($transAdd) < 2){
        $errors['transAdd'] = "Invalid Wallet Address";
    }

    $transAddQuery = selectOne('transactions', ['user_idd'=> $user_idd, 'type'=> $type, 'status'=> $status ]);

    if($transAddQuery['status'] ===  $status){
        $errors['transAdd'] = "You have a pending Cashout";
        $_SESSION['message'] = "You already have a pending Cashout";
        $_SESSION['alert-class'] = "alert-success";
        header("location: index.php");
        exit();
    }

    $walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);
    if($walletBalance < $amount){
        $errors['balance'] = "Insufficient balance";
    }

    if (count($errors) === 0){

        $sql = "INSERT INTO transactions (user_idd, amount, status, type, transAdd) 
        VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('idsss', $user_idd, $amount, $status, $type, $transAdd);
        if($stmt->execute()){

            //Flash message

            $_SESSION['message'] = "Cashout request sent";
            $_SESSION['alert-class'] = "alert-success";

            header("location: index.php");
            exit();
        }
        else{
            $errors['db_error'] = "Database error : Failed to register";
        }
    }

}



?>