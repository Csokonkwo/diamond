<?php

require('dbFunctions.php');

//include(ROOT_PATH . "/blog/control/server/validateUser.php");

$errors = array();
$username = "";
$email = "";
$password = "";
$password_2 = "";
$table = 'users';

function loginUser($user){

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Login Successful';
    $_SESSION['type'] = 'green';
    header('location: blog/index.php');
    exit();

}

//register users with functions already created

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

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = createUser($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

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



?>