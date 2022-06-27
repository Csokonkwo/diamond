<?php 
include("../includes/dbFunctions.php");

//get last date from database in y-d-m format
$todayDate = date("Y-m-d");

$lastDate = selectOne('site_info', ['keyAccess' => 'last_cron_update']);


//check if date is equal to today's date else exit if equal;

if($todayDate == $lastDate['keyValue']){
    echo "All investment paid already";
    exit();
}

//if not equal run a for loop for investment plans in db

$allInvestments = selectAll('transactionz', ['type' => 'investment']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] <= 6){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

}



//run a function to credit the user

function creditUser($package, $amount, $username, $id, $payment_m){
$percentage;

if($package == 'silver'){
    $percentage = 0.045;
}

if($package == 'gold'){
    $percentage = 0.058;
}

if($package == 'platinum'){
    $percentage = 0.058;
}

$finalPercentage = $percentage * $amount;

$_GET['amount'] = $finalPercentage;
$_GET['user_id'] = $username;
$_GET['type'] = 'interest';
$_GET['status'] = 'paid';
$_GET['amount'] = $finalPercentage;

$addInterest = createUser('transactionz', $_GET);

if($payment_m == 6){
    $_GET['amount'] = $amount;
    createUser('transactionz', $_GET);
}

$payment_m = $payment_m + 1;
$updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);

}



    $updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
    echo "All investment paid";

// add a transsaction for each loop function call;


