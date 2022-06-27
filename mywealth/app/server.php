<?php

require '../includes/dbFunctions.php';

if(!isset($_SESSION['id'])){
    header('location: ../register/signin.php');
    exit();
}

if(isset($_GET['mode'])){
    update('users', $_SESSION['id'], ['settings' => $_GET['mode']]);
}

$ban = selectOne('users', ['id' => $_SESSION['id']]);

if($ban['ban'] == 1){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    unset($_SESSION['referrer_id']);
    
    header('location: ../index.php');
    exit();
}


$confirmedDeposits = calculateTotal('transactionz', $_SESSION['id'], 'deposit', 'confirmed');
$confirmedReferrals = calculateTotal('transactionz', $_SESSION['id'], 'referral', 'confirmed');
$confirmedInterests = calculateTotal('interests', $_SESSION['id'], 'interest', 'paid');
$confirmedCredits = calculateTotal('transactionz', $_SESSION['id'], 'transfer', 'received');
$confirmedNFPs = calculateTotal('interests', $_SESSION['id'], 'NFP_Payroll', 'confirmed');
$charges = calculateTotal('transactionz', $_SESSION['id'], 'charges', 'paid');

$confirmedCashouts = calculateTotal2($_SESSION['id'], 'withdrawal');
$confirmedinvestments = calculateTotal2($_SESSION['id'], 'investment');
$confirmedDebits = calculateTotal('transactionz', $_SESSION['id'], 'transfer', 'sent');

$income = $confirmedDeposits + $confirmedReferrals + $confirmedInterests + $confirmedCredits + $confirmedNFPs;
$expenditure = $confirmedCashouts + $confirmedinvestments + $confirmedDebits + $charges;

$balance = $income - $expenditure;
$balance = number_format($balance, 2);

$id = '';
$amount = '';
$reference = '';
$errors = array();


if(isset($_POST['deposit'])){

    if($_POST['amount'] < 4){
        $errors['amount'] = "Minimum Deposit allowed is $4";
    }

    if(strlen($_POST['payment_method']) < 7){
        $errors['payment_method'] = "Please choose a payment method";
    }

    if(empty($_FILES['reference']['name'])){
        $errors['image'] = "Please upload Proof of payment";
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
    }

}


if(isset($_POST['withdraw'])){

    if($_POST['amount'] < 4){
        $errors['amount'] = "Minimum withdrawal allowed is $4";
    }

    if(strlen($_POST['reference']) < 4 && strlen($_POST['other_date']) < 4){
        $errors['pay_ment'] = "Payment details empty";
    }

    if(strlen($_POST['payment_method']) < 4){
        $errors['payment_method'] = "Please choose a payment method";
    }

    if (count($errors) === 0){
        
        $pendingCheck = selectOne('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'withdrawal', 'status'=> 'pending' ]);

        if($_POST['amount'] > $balance){
            $errors['Balance'] = "Insufficient Balance";
        }

        if(isset($pendingCheck)){
            $errors['pendingCheck'] = "You have a pending withdrawal";
        }

        $checkWithdraw = selectAll('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'withdrawal']);
        $checkInvest = selectAll('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'investment', 'status'=> 'confirmed']);

        $checkWithdraw = count($checkWithdraw) + 1;
        $checkInvest = count($checkInvest);

        if($checkInvest <= $checkWithdraw){
            $errors['pendingCheck'] = "You have to reinvest before you can withdraw";
        }

        if (count($errors) === 0){

            unset($_POST['withdraw']);

            $_POST['user_id'] = $_SESSION['id'];
            $_POST['status'] = 'pending';
            $_POST['type'] = 'withdrawal';


            $withCharge = $_POST['amount'] * 0.10;

            if($_POST['amount'] >= 50){
                $withCharge = $_POST['amount'] * 0.15;
            }
            
            $amount = $_POST['amount'] - $withCharge;
            
            
            $_POST['amount'] = $amount;
            $makeWithdraw = createUser('transactionz', $_POST);

            $_POST['amount'] = $withCharge;
            $_POST['status'] = 'paid';
            $_POST['type'] = 'charges';
    
            if($makeWithdraw == true){

                $makeCharges = createUser('transactionz', $_POST);

                $_SESSION['message'] = "Withdrawal Successful, a vendor will pay you within 48hours";
                $_SESSION['alert-class'] = "alert-success";
    
                header("location: ../app/history.php");
                exit();
    
            }
        
            else {$errors['db_error'] = "Withdrawal failed";}

        }

    } 

    else{
        $amount = $_POST['amount'];
        $reference = $_POST['reference'];
    }

}



if(isset($_POST['invest'])){

    if($_POST['amount'] < 4){
        $errors['amount'] = "Minimum Investment allowed is $4";
    }

    if($_POST['amount'] > $balance){
        $errors['Balance'] = "Insufficient Balance";
    }

    if(strlen($_POST['reference']) < 3){
        $errors['reference'] = "Please choose a Package";
    }

    $lastinvestment = selectOneDesc('transactionz', ['user_id'=> $_SESSION['id'], 'type'=> 'investment']);

    if($lastinvestment){
        if($_POST['amount'] < $lastinvestment['amount']){
            $errors['Balance'] = "Amount must be equal or greater than the previous investment amount";
        }
    }
    
    if (count($errors) === 0){
        unset($_POST['invest']);

        $firstInvestment = calculateTotal2($_SESSION['id'], 'investment');

        if($firstInvestment == 0){

            if(strlen($_SESSION['referrer_id']) > 3){
                $amountt = $_POST['amount'] * 0.05;
                if($_POST['reference'] == 'Premium'){
                    $amountt = $_POST['amount'] * 0.10;
                }
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
        $_POST['other_date'] = 0;
        
        $makeInvest = createUser('transactionz', $_POST);

        if($makeInvest == true){

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

if(isset($_POST['transfer'])){

    if($_POST['amount'] < 1){
        $errors['amount'] = "Minimum transfer allowed is $1";
    }

    if($_POST['amount'] > $balance){
        $errors['Balance'] = "Insufficient Balance";
    }

    if(strlen($_POST['receiver_id']) < 4){
        $errors['receiver_id'] = "Invalid ID";
    }

    if($_POST['receiver_id'] == $_SESSION['id']){
        $errors['receiver_id'] = "You cannot transfer to yourself";
    }

    if (count($errors) === 0){
        unset($_POST['transfer']);

        $reciever = selectOne('users', ['id' => $_POST['receiver_id']]);

        if($reciever == TRUE){

            $_GET['user_id'] = $_POST['receiver_id'];
            $_GET['amount'] = $_POST['amount'];
            $_GET['type'] = 'transfer';
            $_GET['status'] = 'received';
            $_GET['reference'] = $_SESSION['username'];
            $_GET['payment_method'] = 'credit';

            $sendMoney = createUser('transactionz', $_GET);

             if($sendMoney == TRUE){
                unset($_POST['receiver_id']);
                $_POST['user_id'] = $_SESSION['id'];
                $_POST['type'] = 'transfer';
                $_POST['status'] = 'sent';
                $_POST['reference'] = $reciever['username'];
                $_POST['payment_method'] = 'debit'; 
                
                $debitMoney = createUser('transactionz', $_POST);
             }

             if($debitMoney == true){

                $_SESSION['message'] = "Transfer to ". $reciever['username'] . ' Successful';
                $_SESSION['alert-class'] = "alert-success";
    
                header("location: ../app/history.php");
                exit();
    
            }else {$errors['db_error'] = "Failed to Transfer";}
        }
        
    }else{$amount = $_POST['amount'];}

}



?>