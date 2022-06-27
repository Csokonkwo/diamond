<?php

session_start();

require '../includes/dbFunctions.php';
require 'mailer.php';

$errors =array();
$username = '';
$email = '';
$user = '';
$verified = '';

$lastname = '';
$firstname = '';
$phone = '';
$gender = '';
$country = '';

$password = "";
$password_2 = "";
$table = 'users';

function loginUser($user){

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Login Successful';
    $_SESSION['type'] = 'green';
    header('location: ../blog/index.php');
    exit();

}

//CODINGS FOR SIGING USERS UP GOES HERE

if(isset($_POST['sign_up'])){

    if (strlen($_POST['username']) < 3){
        array_push($errors, 'Username must be atleast 3 characters');
    }

    if (empty($_POST['email'])){
        array_push($errors, 'Email is required');
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        array_push($errors, 'Email is invalid');
    }

    if (strlen($_POST['password']) < 4){
        array_push($errors, 'Password must be atleast 6 characters');
    }

    if ($_POST['password_2'] !== $_POST['password'] ){
        array_push($errors, 'Passwords do not match');
    }

    $existingUser = selectOne('users', ['username' => $_POST['username']]);
    if($existingUser){
     array_push($errors, 'Username already exist');
    }

    $existingUser = selectOne('users', ['email' => $_POST['email']]);
    if($existingUser){
     array_push($errors, 'Email already exist');
    }


    if(count($errors) === 0){
        unset($_POST['sign_up'], $_POST['password_2']);
        $_POST['admin'] = 0;
        $_POST['token'] = bin2hex(random_bytes(50));
        $_POST['verified'] = false;

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = createUser($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        sendVerificationEmail($_POST['email'], $_POST['token'], $_POST['username'] );

        //login users 
        loginUser($user);
    }
    
    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2']; 
    }

}


//THIS CODINGS COME UP WHEN A USER IS ABOUT TO LOGIN


if(isset($_POST['sign_in'])){

    if (empty($_POST['email'])){
        array_push($errors, 'Email is required');
    }

    if (empty($_POST['password'])){
        array_push($errors, 'Password is required');
    }

    if(count($errors)===0){

        $user = selectOne($table, ['email' => $_POST['email']]);
        if(password_verify($_POST['password'], $user['password'])){

            //login users 
            loginUser($user);
        }

        else{
            array_push($errors, 'Wrong user details');
        }
    }
    
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];
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
    
            $_SESSION['message'] = "Your Email has been verified successfully";
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


function updatePassword($token){

    global $conn;
    $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];

    header('location: new_password.php?new_pass=0');
    exit(0);
}


if(isset($_POST['new_password'])){

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

?>