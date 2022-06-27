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


function creditUser($package, $amount, $username, $id, $payment_m){

    $percentage = 0;
    
    if($package == 'Beginner'){
        $percentage = 0.03;
    }
    
    if($package == 'Standard'){
        $percentage = 0.05;
    }
    
    if($package == 'Business'){
        $percentage = 0.10;
    }
    
    
    $finalPercentage = $percentage * $amount;
    
    $_GET['amount'] = $finalPercentage;
    $_GET['user_id'] = $username;
    $_GET['type'] = 'interest';
    $_GET['status'] = 'paid';
    
    $addInterest = createUser('interests', $_GET);
    
    $userDetail = selectOne('users', ['id'=> $_GET['user_id']]);

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
    
    if(isset($userDetail)){
        sendInterestEmail($userDetail['email'], $userDetail['username'], $package, $_GET['amount']);
    }
    
}
    

function creditLast($id){
    $updateNum = update('transactionz', $id, ['status'=> 'completed', 'payment_method'=> '7']); 
}


$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] <= 6){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] == 7){
        creditLast($investment['id']);
    }

}



$updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
echo "Paid";