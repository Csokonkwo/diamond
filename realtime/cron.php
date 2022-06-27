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

    $percentage ;
    
    if($package == 'Bronze'){
        $percentage = 0.0175;
    }
    
    if($package == 'Silver'){
        $percentage = 0.0209;
    }
    
    if($package == 'Gold'){
        $percentage = 0.0236;
    }
    
    if($package == 'Platinum'){
        $percentage = 0.0268;
    }

    if($package == 'Starter'){
        $percentage = 0.05;
    }
    
    if($package == 'Basic'){
        $percentage = 0.07;
    }
    
    if($package == 'Advanced'){
        $percentage = 0.10;
    }
    
    if($package == 'Super'){
        $percentage = 0.15;
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


$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed', 'other_ref' => 'estate']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] == 29){
        creditLast($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] <= 28){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }
}


$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed', 'other_ref' => 'forex']);

foreach($allInvestments as $investment){

    $other_date = $investment['other_date'] + 1;
    $update_other_date = update('transactionz', $investment['id'], ['other_date'=> $other_date]);

    
    if($investment['payment_method'] == 41){
        creditLast($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] <= 40){
        if($investment['other_date'] == 6 || $investment['other_date'] == 12 || $investment['other_date'] == 18 || $investment['other_date'] == 24 || $investment['other_date'] == 30 ){
            creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
        }
        
    }

}


$updater = update('site_info', 1, ['keyValue'=> $todayDate]);
echo "Paid";