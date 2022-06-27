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


function creditUser($package, $amount, $user_id, $t_id, $payment_m){

    $percentage = 0;
    
    if($package == 'Basic'){
        $percentage = 0.0075;
    }
    
    if($package == 'Regular'){
        $percentage = 0.010;
    }
    
    if($package == 'Standard'){
        $percentage = 0.015;
    }

    if($package == 'Premium'){
        $percentage = 0.020;
    }

    if($package == 'Bronze' && $payment_m == 30){
        $percentage = 0.250;
    }
    
    if($package == 'Silver' && $payment_m == 30){
        $percentage = 0.350;
    }
    
    if($package == 'Gold' && $payment_m == 30){
        $percentage = 0.490;
    }
    
    if($package == 'Diamond' && $payment_m == 30){
        $percentage = 0.650;
    }
    
    if($percentage > 0){
        $finalPercentage = $percentage * $amount;
    
        $_GET['amount'] = $finalPercentage;
        $_GET['user_id'] = $user_id;
        $_GET['type'] = 'interest';
        $_GET['status'] = 3;
        
        $addInterest = createUser('interests', $_GET);
        $userDetail = selectOne('users', ['id'=> $_GET['user_id']]);
    }

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $t_id, ['payment_method'=> $payment_m]);
    
    if(isset($userDetail)){
        sendInterestEmail($userDetail['email'], $userDetail['username'], $userDetail['id'], $package, $_GET['amount']);
    }
    
}
    

function creditLast($user_id, $t_id, $payment_m, $package, $amount){
    
    if($payment_m == 90){

        $_GET['user_id'] = $user_id;
        
        $userDetail = selectOne('users', ['id'=> $_GET['user_id']]);

        $status = 3; 
        $updateNum = update('transactionz', $t_id, ['status'=> $status]);
        
        sendEndPlan($userDetail['email'], $userDetail['username'], $userDetail['id'], $package, $amount);
    }
    
}


$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => '2']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] == 90 && $investment['status'] == 2){
        creditLast($investment['user_id'], $investment['id'], $investment['payment_method'], $investment['reference'], $investment['amount']);
    }

    if($investment['payment_method'] < 90){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

}


$updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
echo "Paid";