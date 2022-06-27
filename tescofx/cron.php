<?php 
include("includes/dbFunctions.php");

//get last date from database in y-d-m format
$todayDate = date("Y-m-d");

$lastDate = selectOne('site_info', ['keyAccess' => 'last_cron_update']);


//check if date is equal to today's date else exit if equal;

if($todayDate == $lastDate['keyValue']){
    echo "Done for today";
    exit();
}

//if not equal run a for loop for investment plans in db

$allInvestments = selectAll('transactionz', ['type' => 'investment']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] <= 4){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

}



//run a function to credit the user

function creditUser($package, $amount, $username, $id, $payment_m){
$percentage;

if($package == 'basic'){
    $percentage = 0.05;
}

if($package == 'regular'){
    $percentage = 0.10;
}

if($package == 'premium'){
    $percentage = 0.20;
}

$finalPercentage = $percentage * $amount;

$_GET['amount'] = $finalPercentage;
$_GET['user_id'] = $username;
$_GET['type'] = 'interest';
$_GET['status'] = 'paid';
$_GET['amount'] = $finalPercentage;

$addInterest = createUser('interests', $_GET);

if($payment_m == 4){
    $_GET['amount'] = $amount;
$_GET['user_id'] = $username;
$_GET['type'] = 'interest';
$_GET['status'] = 'paid';
    createUser('interests', $_GET);
}

$payment_m = $payment_m + 1;
$updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);

}



    $updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
    echo "Paid";

// add a transaction for each loop function call;


