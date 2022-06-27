<?php 
include("includes/dbFunctions.php");

//get last date from database in y-d-m format
$todayDate = date("Y-m-d");

$lastDate = selectOne('site_info', ['keyAccess' => 'last_cron_update']);

if($todayDate == $lastDate['keyValue']){
    echo "Done for today";
    exit();
}

$allInvestments = selectAll('transactionz', ['type' => 'investment']);

foreach($allInvestments as $investment){

    if($investment['other_ref'] == 7){
        if($investment['payment_method'] <= 15){
            creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
        }
    }

    if($investment['other_ref'] < 8){
        $other_ref = $investment['other_ref'] + 1;
        $update_other_ref = update('transactionz', $investment['id'], ['other_ref'=> $other_ref]);
    }

}


//run a function to credit the user

function creditUser($package, $amount, $username, $id, $payment_m){

    $percentage;

    if($package == 'basic'){
        $percentage = 0.040;
    }

    if($package == 'regular'){
        $percentage = 0.060;
    }

    if($package == 'standard'){
        $percentage = 0.10;
    }

    $finalPercentage = $percentage * $amount;

    $_GET['amount'] = $finalPercentage;
    $_GET['user_id'] = $username;
    $_GET['type'] = 'interest';
    $_GET['status'] = 'paid';
    $_GET['amount'] = $finalPercentage;

    $addInterest = createUser('transactionz', $_GET);

    if($payment_m == 16){
        $_GET['amount'] = $amount;
        createUser('transactionz', $_GET);
    }

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);

}


$updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
echo "Paid";

// add a transaction for each loop function call;


