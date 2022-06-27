<?php 
include("includes/dbFunctions.php");
include("register/cronMailer.php");

//get last date from database in y-d-m format
$todayDate = date("Y-m-d");

$lastDate = selectOne('site_info', ['keyAccess' => 'last_cron_update']);

//check if date is equal to today's date else exit if equal;

if($todayDate == $lastDate['keyValue']){
    echo "Done for today";
    exit();
}

function creditUser($package, $amount, $user_id, $id, $payment_m){

    $percentage = 0;
    
    if($package == 'Basic'){
        $percentage = 0.035;
    }
    
    if($package == 'Starter'){
        $percentage = 0.040;
    }
    
    if($package == 'Standard'){
        $percentage = 0.042;
    }
    
    if($package == 'Premium'){
        $percentage = 0.046;
    }
    
    $finalPercentage = $percentage * $amount;
    
    $_GET['amount'] = $finalPercentage;
    $_GET['user_id'] = $user_id;
    $_GET['type'] = 'interest';
    $_GET['status'] = 'paid';
    
    $addInterest = createUser('interests', $_GET);

    $user = selectOne('users', ['id'=> $_GET['user_id']]);
    sendInterestEmail($user['email'], $user['username'], $package, $_GET['amount']);

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
    
}
    

function creditLast($package, $amount, $user_id, $id, $payment_m){

    $_GET['amount'] = $amount;
    $_GET['user_id'] = $user_id;
    $_GET['type'] = 'interest';
    $_GET['status'] = 'paid';

    $addInterest = createUser('interests', $_GET);

    $user = selectOne('users', ['id'=> $_GET['user_id']]);
    sendEndPlan($user['email'], $user['username'], $package, $_GET['amount']);
    
    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
}

$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] == 15){
        creditLast($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] <= 14){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }
}

$updater = update('site_info', 1, ['keyValue'=> $todayDate]);
echo "Paid";