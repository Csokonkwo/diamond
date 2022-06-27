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

if(isset($_POST['pay_interest'])){

    $status = 'Completed';
    $t_id = $_POST['t_id'];

    if($_POST['amount'] <= 29){
        $errors['amount'] = "Minimum Interest allowed is $30";
    }

    if(count($errors)==0){

        update('transactions', $t_id, ['status'=> $status]);

        unset($_POST['pay_interest']);
        unset($_POST['t_id']);

        $_POST['status'] = 'Paid';
        $_POST['type'] = 'Interest';
        $_POST['transAdd'] = 'Earnings';
        $_POST['currency'] = 'GM coin';

        $payInterest = createUser('transactions', $_POST);

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