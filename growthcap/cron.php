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

    $percentage ;
    
    if($package == 'Beginner'){
        $percentage = 0.015;
    }
    
    if($package == 'Standard'){
        $percentage = 0.020;
    }
    
    if($package == 'Advanced'){
        $percentage = 0.025;
    }
    
    if($package == 'Business'){
        $percentage = 0.030;
    }
    
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
    
    $finalPercentage = $percentage * $amount;
    
    $_GET['amount'] = $finalPercentage;
    $_GET['user_id'] = $username;
    $_GET['type'] = 'interest';
    $_GET['status'] = 'paid';
    
    $addInterest = createUser('interests', $_GET);
    
    $userDetail = selectOne('users', ['id'=> $_GET['user_id']]);

    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
    
    sendInterestEmail($userDetail['email'], $userDetail['username'], $package, $_GET['amount']);
    
}
    

function creditLast($package, $amount, $username, $id, $payment_m){
    
    if($payment_m == 28){

        $_GET['amount'] = $amount;
	$_GET['user_id'] = $username;
    	$_GET['type'] = 'interest';
    	$_GET['status'] = 'paid';
    
        createUser('interests', $_GET);

	$userDetail = selectOne('users', ['id'=> $_GET['user_id']]);
        
        sendEndPlan($userDetail['email'], $userDetail['username'], $package, $_GET['amount']);
    }
    
    $payment_m = $payment_m + 1;
    $updateNum = update('transactionz', $id, ['payment_method'=> $payment_m]);
    
}


$allInvestments = selectAll('transactionz', ['type' => 'investment', 'status' => 'confirmed']);

foreach($allInvestments as $investment){
// in each loop get the percentage of the investment to credit per day

    if($investment['payment_method'] <= 27){
        creditUser($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

    if($investment['payment_method'] == 28){
        creditLast($investment['reference'], $investment['amount'], $investment['user_id'], $investment['id'], $investment['payment_method']);
    }

}



$updater = update('site_info', 1, ['keyValue'=> $todayDate ]);
echo "Paid";