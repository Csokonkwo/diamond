<?php

require '../includes/dbFunctions.php';

if(!isset($_SESSION['id'])){
    header('location: ../register/signin.php');
    exit();
}


$confirmedDeposits = calculateTotal('transactionz', $_SESSION['id'], 'deposit', 'confirmed');
$confirmedReferrals = calculateTotal('transactionz', $_SESSION['id'], 'referral', 'confirmed');
$confirmedInterests = calculateTotal('interests', $_SESSION['id'], 'interest', 'paid');

$confirmedCashouts = calculateTotal2($_SESSION['id'], 'cashout');
$confirmedinvestments = calculateTotal2($_SESSION['id'], 'investment');

$income = $confirmedDeposits + $confirmedReferrals + $confirmedInterests;
$expenditure = $confirmedCashouts + $confirmedinvestments;

$balance = $income - $expenditure;

$amount = '';
$reference = '';
$errors = array();


if(isset($_POST['deposit'])){

    if($_POST['amount'] <= 199){
        $errors['amount'] = "Minimum Deposit allowed is $200";
    }

    if(strlen($_POST['payment_method']) < 7){
        $errors['payment_method'] = "Please choose a payment method";
    }

    if(!empty($_FILES['reference']['name'])){
        $image_name = time(). "_" . $_FILES['reference']['name'];
        $destination = "depos/" .$image_name;
        $result = move_uploaded_file($_FILES['reference']['tmp_name'], $destination);

        if($result){
            $_POST['reference'] = $image_name;
        }
        else{
            $errors['reference'] = "Failed to upload screenshot";
        }
    }

    if (count($errors) === 0){
        
        $hashCheck = selectOne('transactionz', ['reference' => $_POST['reference']]);
        $pendingCheck = selectOne('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'deposit', 'status'=> 'pending' ]);

        if($pendingCheck['status'] == 'pending'){
            $errors['pendingCheck'] = "You have a pending Deposit";
        }

        if($hashCheck){
            $errors['pendingCheck'] = "Transaction Hash already used";
        }

        if (count($errors) === 0){
            unset($_POST['deposit']);
    
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['status'] = 'pending';
            $_POST['type'] = 'deposit';
            
            $makeDeposit = createUser('transactionz', $_POST);
    
            if($makeDeposit == true){
    
                $_SESSION['message'] = "Deposit Successful";
                $_SESSION['alert-class'] = "alert-success";
    
                header("location: ../app/history.php");
                exit();
    
            }
            
            else {$errors['db_error'] = "Failed to make Deposit";}
        }
    
    }

    else{
        $amount = $_POST['amount'];
        $reference = $_POST['reference']; 
    }

}


if(isset($_POST['cashout'])){

    if($_POST['amount'] <= 19){
        $errors['amount'] = "Minimum Cashout allowed is $20";
    }

    if(strlen($_POST['reference']) < 10){
        $errors['reference'] = "Please enter a valid Wallet Address";
    }

    if(strlen($_POST['payment_method']) < 7){
        $errors['payment_method'] = "Please choose a payment method";
    }

    if (count($errors) === 0){
        
        $pendingCheck = selectOne('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'cashout', 'status'=> 'pending' ]);

        if($_POST['amount'] > $balance){
            $errors['Balance'] = "Insufficient Balance";
        }

        if($pendingCheck['status'] == 'pending'){
            $errors['pendingCheck'] = "You have a pending Cashout";
        }

        if (count($errors) === 0){

            unset($_POST['cashout']);

            $_POST['user_id'] = $_SESSION['id'];
            $_POST['status'] = 'pending';
            $_POST['type'] = 'cashout';
            
            $makeDeposit = createUser('transactionz', $_POST);
    
            if($makeDeposit == true){
    
                $_SESSION['message'] = "Cashout Pending";
                $_SESSION['alert-class'] = "alert-success";
    
                header("location: ../app/history.php");
                exit();
    
            }
        
            else {$errors['db_error'] = "Cashout failed";}

        }

    } 

    else{
        $amount = $_POST['amount'];
        $reference = $_POST['reference'];
    }

}



if(isset($_POST['invest'])){

    if($_POST['amount'] <= 49){
        $errors['amount'] = "Minimum Investment allowed is $50";
    }

    if($_POST['amount'] > $balance){
        $errors['Balance'] = "Insufficient Balance";
    }

    if(strlen($_POST['reference']) < 3){
        $errors['reference'] = "Please choose a Plan";
    }

    if (count($errors) === 0){
        unset($_POST['invest']);

        $firstInvestment = calculateTotal2($_SESSION['id'], 'investment');

        if($firstInvestment == 0){

            if(strlen($_SESSION['referrer_id']) > 3){
                $amountt = $_POST['amount'] * 0.1;
                $_GET['amount'] = $amountt;
                $_GET['user_id'] = $_SESSION['referrer_id'];
                $_GET['status'] = 'confirmed';
                $_GET['type'] = 'referral';
                $_GET['payment_method'] = 'Nil';

                $payReferrer = createUser('transactionz', $_GET);
               
            }
        }

        $_POST['user_id'] = $_SESSION['id'];
        $_POST['status'] = 'confirmed';
        $_POST['type'] = 'investment';
        $_POST['payment_method'] = '0';
        
        $makeInvest = createUser('transactionz', $_POST);

        if($makeInvest == true){

            //sendVerificationEmail($_POST['email'], $_POST['token'], $_POST['username'] );

            $_SESSION['message'] = "Investment Successful";
            $_SESSION['alert-class'] = "alert-success";

            header("location: ../app/history.php");
            exit();

        }
        
        else {$errors['db_error'] = "Failed to Invest";}
    }

    else{
        $amount = $_POST['amount'];
    }

}


?>