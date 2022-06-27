<?php

session_start();
include('../includes/dbFunctions.php');


if(!isset($_SESSION['id'])){
    header('location: ../register/signin.php');
    exit();
}

$userDetail = selectOne('users', ['id' => $_SESSION['id']]);
$_SESSION['id'] = $userDetail['id'];
$_SESSION['verified'] = $userDetail['verified'];
$_SESSION['admin']= $userDetail['admin'];


if($_SESSION['verified'] == 0){
    $_SESSION['message'] = "Please verify your Email";
    $_SESSION['alert-class'] = "alert-danger";

    header("location: unverified.php");

    exit();
}

$confirmedDeposits = calculateTotal($_SESSION['id'], 'Deposit', 'Confirmed');
$confirmedReferrals = calculateTotal($_SESSION['id'], 'Referral', 'Confirmed');
$confirmedInterests = calculateTotal($_SESSION['id'], 'Interest', 'Paid');

$confirmedCashouts = calculateTotal2($_SESSION['id'], 'Cashout');
$confirmedinvestments = calculateTotal2($_SESSION['id'], 'Investment');

$income = $confirmedDeposits + $confirmedReferrals + $confirmedInterests;
$expenditure = $confirmedCashouts + $confirmedinvestments;

$balance = $income - $expenditure;

$amount = '';
$transAdd = '';
$errors = array();


if(isset($_POST['deposit'])){

    if($_POST['amount'] <= 24){
        $errors['amount'] = "Minimum Deposit allowed is $25";
    }

    if(strlen($_POST['transAdd']) < 4){
        $errors['transAdd'] = "Please enter a valid transaction hash";
    }

    if (count($errors) === 0){
        
        $hashCheck = selectOne('transactions', ['transAdd' => $_POST['transAdd']]);
        $pendingCheck = selectOne('transactions', ['user_idd'=> $_SESSION['id'], 'type'=> 'Deposit', 'status'=> 'Pending' ]);
        
        if($hashCheck['transAdd'] == $_POST['transAdd']){
            $errors['transAdd'] = "Transaction hash already exists";
        }

        if($pendingCheck['status'] == 'Pending'){
            $errors['pendingCheck'] = "You have a pending Deposit";
        }
    }

    //CHANGES WAS MADE HERE TO STOP TWO USERS USING THE SAME USERNAME

    if (count($errors) === 0){
        unset($_POST['deposit']);

        $_POST['user_idd'] = $_SESSION['id'];
        $_POST['status'] = 'Pending';
        $_POST['type'] = 'Deposit';
        
        $makeDeposit = createUser('transactions', $_POST);

        if($makeDeposit == true){

            $_SESSION['message'] = "Deposits Successful";
            $_SESSION['alert-class'] = "alert-success";

            header("location: ../app/index.php");
            exit();

        }
        
        else {$errors['db_error'] = "Failed to make Deposit";}
    }

    else{
        $amount = $_POST['amount'];
        $transAdd = $_POST['transAdd']; 
    }

}

if(isset($_POST['cashout'])){

    if($_POST['amount'] <= 49){
        $errors['amount'] = "Minimum Cashout allowed is $50";
    }

    if(strlen($_POST['transAdd']) < 4){
        $errors['transAdd'] = "Please enter a valid Bitcoin Address";
    }

    if (count($errors) === 0){
        
        $pendingCheck = selectOne('transactions', ['user_idd'=> $_SESSION['id'], 'type'=> 'Cashout', 'status'=> 'Pending' ]);

        if($_POST['amount'] > $balance){
            $errors['Balance'] = "Insufficient Balance";
        }

        if($pendingCheck['status'] == 'Pending'){
            $errors['pendingCheck'] = "You have a pending Cashout";
        }
    }

    //CHANGES WAS MADE HERE TO STOP TWO USERS USING THE SAME USERNAME

    if (count($errors) === 0){
        unset($_POST['cashout']);

        $_POST['user_idd'] = $_SESSION['id'];
        $_POST['status'] = 'Pending';
        $_POST['type'] = 'Cashout';
        
        $makeDeposit = createUser('transactions', $_POST);

        if($makeDeposit == true){

            $_SESSION['message'] = "Cashout Pending";
            $_SESSION['alert-class'] = "alert-success";

            header("location: ../app/index.php");
            exit();

        }
        
        else {$errors['db_error'] = "Cashout failed";}
    }

    else{
        $amount = $_POST['amount'];
        $transAdd = $_POST['transAdd'];
    }

}


if(isset($_POST['invest'])){

    if($_POST['amount'] <= 24){
        $errors['amount'] = "Minimum Investment allowed is $25";
    }

    if($_POST['amount'] > $balance){
        $errors['Balance'] = "Insufficient Balance";
    }

    $existingInvestments = checkRows($_SESSION['id'], 'Investment', 'Confirmed');
    if($existingInvestments >= 2){
        $errors['Invests'] = "Multiple Investments, Contact Customer Care";
    }

    if (count($errors) === 0){
        unset($_POST['invest']);

        $firstInvestment = calculateTotal2($_SESSION['id'], 'Investment');

        if($firstInvestment == 0){
            $amountt = $_POST['amount'] * 0.1;
            $_GET['amount'] = $amountt;
            $_GET['user_idd'] = $_SESSION['referrer_id'];
            $_GET['status'] = 'Confirmed';
            $_GET['type'] = 'Referral';
            $_GET['transAdd'] = 'Nil';

            $payReferrer = createUser('transactions', $_GET);
        }

        $_POST['user_idd'] = $_SESSION['id'];
        $_POST['status'] = 'Confirmed';
        $_POST['type'] = 'Investment';
        $_POST['transAdd'] = 'Nil';
        
        $makeInvest = createUser('transactions', $_POST);

        if($makeInvest == true){

            //sendVerificationEmail($_POST['email'], $_POST['token'], $_POST['username'] );

            $_SESSION['message'] = "Investment Successful";
            $_SESSION['alert-class'] = "alert-success";

            header("location: ../app/index.php");
            exit();

        }
        
        else {$errors['db_error'] = "Failed to Invest";}
    }

    else{
        $amount = $_POST['amount'];
    }

}




?>