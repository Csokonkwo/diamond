<?php

include('../includes/dbFunctions.php');


if(!isset($_SESSION['id'])){
    header('location: ../register/signin.php');
    exit();
}

if($_SESSION['admin'] < 3){
    header('location: ../app/index.php');
    exit();
}

$userDetail = selectOne('users', ['id' => $_SESSION['id']]);
$_SESSION['id'] = $userDetail['id'];
$_SESSION['verified'] = $userDetail['verified'];
$_SESSION['referrer_id']= $userDetail['referrer_id'];


$id = '';
$username = '';
$amount = '';
$currency = '';
$type = '';
$errors = array();


if(isset($_POST['add_money'])){

    unset($_POST['add_money']);
    

    if (empty($_POST['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($_POST['amount'])){
        array_push($errors, 'Amount is required');
    }

    $benefactor = selectOne('users', ['username' => $_POST['username']]);

    if($benefactor == false){
        array_push($errors, 'No user found');
    }
    
    
    if(count($errors)==0){
        unset($_POST['username']);

        $currentadmin = $_SESSION['username'];

        $_POST['user_id'] = $benefactor['id'];
        $_POST['type'] = 'deposit';
        $_POST['status'] = 'confirmed';
        $_POST['reference'] = $currentadmin;
        $_POST['payment_method'] = 'bitcoin';

        $addmo = createUser('transactionz', $_POST);
        
        if($addmo == True){
            header('location: index.php');
            exit();
        }

        else{
            echo mysqli_error($conn);
            die();
        }
       
    }

    else{
        $amount = $_POST['amount'];
        $username = $_POST['username'];
    }

}



if(isset($_POST['withdraw'])){

    unset($_POST['withdraw']);
    

    if (empty($_POST['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($_POST['amount'])){
        array_push($errors, 'Amount is required');
    }

    $benefactor = selectOne('users', ['username' => $_POST['username']]);

    if($benefactor == false){
        array_push($errors, 'No user found');
    }
    
    
    if(count($errors)==0){
        unset($_POST['username']);

        $currentadmin = $_SESSION['username'];

        $_POST['user_id'] = $benefactor['id'];
        $_POST['type'] = 'cashout';
        $_POST['status'] = 'paid';
        $_POST['reference'] = $currentadmin;
        $_POST['payment_method'] = 'bitcoin';

        $addmo = createUser('transactionz', $_POST);
        
        if($addmo == True){
            header('location: index.php');
            exit();
        }

        else{
            echo mysqli_error($conn);
            die();
        }
       
    }

    else{
        $amount = $_POST['amount'];
        $username = $_POST['username'];
    }

}



if(isset($_POST['send_email'])){

    unset($_POST['send_email']);
    

    if (empty($_POST['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($_POST['amount'])){
        array_push($errors, 'Amount is required');
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email Address is invalid";
    }

    if(empty($_POST['email'])){
        $errors['email'] = "Email is Required";
    }
    
    
    if(count($errors)==0){

        $hash = bin2hex(random_bytes(30));
        sendCashoutConfirm($_POST['email'], $_POST['username'], $_POST['amount'], $hash);

        $_SESSION['message'] = "Message sent Successfully";
        $_SESSION['alert-class'] = "alert-success";
       
    }

}

if(isset($_POST['realp'])){

    unset($_POST['realp']);
    

    if (empty($_POST['wallet_add'])){
        array_push($errors, 'Transaction hash is required');
    }
    
    if(count($errors)==0){

        $status = $_POST['status'];
        $t_id = $_POST['t_id'];
        update('transactionz', $t_id, ['status'=> $status]);
        
        $casUser = selectOne('users', ['id' => $_POST['u_id']]);
        sendCashoutConfirm($casUser['email'], $casUser['username'], $_POST['a_id'], $_POST['wallet_add']);

        $_SESSION['message'] = "Paid Successfully";
        $_SESSION['alert-class'] = "alert-success";
        header('location: cashout.php');
        exit();
       
    }

}


?>