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

if(isset($_GET['amount'], $_GET['user_idd'])){

    if($_GET['currency'] == 'starter'){
        $_GET['amount'] = $_GET['amount'] * 1.2;
    }

    if($_GET['currency'] == 'regular'){
        $_GET['amount'] = $_GET['amount'] * 1.4;
    }

    if($_GET['currency'] == 'standard'){
        $_GET['amount'] = $_GET['amount'] * 2;
    }

    if($_GET['currency'] == 'bronze'){
        $_GET['amount'] = $_GET['amount'] * 2.5;
    }

    if($_GET['currency'] == 'silver'){
        $_GET['amount'] = $_GET['amount'] * 3.5;
    }

    if($_GET['currency'] == 'gold'){
        $_GET['amount'] = $_GET['amount'] * 4.5;
    }

    $status = 'Completed';
    $t_id = $_GET['t_id'];

    if(count($errors)==0){

        update('transactions', $t_id, ['status'=> $status, 'transAdd' => 'Paid']);

        unset($_GET['t_id']);

        $_GET['status'] = 'Paid';
        $_GET['type'] = 'Interest';
        $_GET['transAdd'] = 'Earnings';
        $_GET['currency'] = 'GM coin';

        $payInterest = createUser('transactions', $_GET);

        if($payInterest == True){
            header('location: index.php');
            exit();
        }

    }

}

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

        $_POST['user_idd'] = $benefactor['id'];
        $_POST['type'] = 'deposit';
        $_POST['status'] = 'confirmed';
        $_POST['transAdd'] = $currentadmin;
        $_POST['currency'] = 'GM coin';

        $addmo = createUser('transactions', $_POST);
        
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

?>