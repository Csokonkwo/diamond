<?php 
include("includes/dbFunctions.php");
include("register/cronMailer.php");

$todayDate = date("Y-m-d");
$lastDate = selectOne('site_info', ['keyAccess' => 'last_cron_update']);

if($todayDate == $lastDate['backup']){
    echo "Done for today";
    exit();
}

function creditUser($package, $amount, $user_id, $id, $payment_m){

    $percentage ;
    
    if($package == 'Basic'){
        $percentage = 0.017;
    }
    
    if($package == 'Starter'){
        $percentage = 0.020;
    }
    
    if($package == 'Standard'){
        $percentage = 0.027;
    }
    
    if($package == 'Premium'){
        $percentage = 0.040;
    }
    
    $finalPercentage = $percentage * $amount;

    $_GET['amount'] = $finalPercentage;
    $_GET['user_id'] = $user_id;
    
    //$addInterest = createUser('interests', $_GET);
    $user = selectOne('users', ['id'=> $_GET['user_id']]);
    sendInterestEmail($user['email'], $user['username'], $package, $_GET['amount']);
    
}
    

function creditLast($package, $amount, $user_id, $id, $payment_m){
    
    $_GET['amount'] = $amount;
    $_GET['user_id'] = $user_id;

    //$addInterest = createUser('interests', $_GET);
    $user = selectOne('users', ['id'=> $_GET['user_id']]);
    sendEndPlan($user['email'], $user['username'], $package, $_GET['amount']);

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
    
}

$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] == 17){
        creditLast($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] <= 16){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }
    
}

$updater = update('site_info', 1, ['backup'=> $todayDate]);
echo "Paid";