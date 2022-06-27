<?php 

include('../path.php');
include('server.php');

$referrals = selectAll('users', ['referrer_id' => $_GET['user_id']]);

$confirmedDeposits = calculateTotal('transactionz', $_GET['user_id'], 'deposit', 'confirmed');
$confirmedReferrals = calculateTotal('transactionz', $_GET['user_id'], 'referral', 'confirmed');
$confirmedInterests = calculateTotal('interests', $_GET['user_id'], 'interest', 'paid');
$confirmedCredits = calculateTotal('transactionz', $_GET['user_id'], 'transfer', 'received');
$confirmedNFPs = calculateTotal('interests', $_GET['user_id'], 'NFP_Payroll', 'confirmed');

$confirmedCashouts = calculateTotal2($_GET['user_id'], 'withdrawal');
$confirmedinvestments = calculateTotal2($_GET['user_id'], 'investment');
$confirmedDebits = calculateTotal('transactionz', $_GET['user_id'], 'transfer', 'sent');

$income = $confirmedDeposits + $confirmedReferrals + $confirmedInterests + $confirmedCredits + $confirmedNFPs;
$expenditure = $confirmedCashouts + $confirmedinvestments + $confirmedDebits;

$balance = $income - $expenditure;
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>

        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>
        <p>Balance : <?php echo $balance ?> </p>

        <p>Deposits : <?php echo $confirmedDeposits  ?> </p>
        <p>Withdrawals : <?php echo $confirmedCashouts  ?> </p>
        <p>Investmentss : <?php echo $confirmedinvestments  ?>   </p>
        <p>Earnings : <?php echo $confirmedInterests  ?></p>
        <p>Nfps : <?php echo $confirmedNFPs  ?> </p>
        <p>Debits : <?php echo $confirmedDebits ?></p>
        <p>Credits : <?php echo $confirmedCredits ?> </p>
        <p>Referrals : <?php echo $confirmedReferrals ?> </p>

        
        <div class="table">
        <?php $referrer = selectOne('users', ['id'=> $_GET['user_id']]); ?>
            <h3> <?php echo $referrer['username'] ?>  's Downlines</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>User_id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Invested</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($referrals as $key => $referral): ?>
                        <tr>
                        <?php $ifinvested = selectOne('transactionz', ['user_id'=> $referral['id'], 'type'=>'investment']); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $referral['id'] ?></td>
                            <td><?php echo $referral['username'] ?></td>
                            <td><?php echo $referral['email'] ?></td>
                            <td> <?php  if($ifinvested){ echo ('Yes');} else{echo ('No');} ?> </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>

        <div class="table">
        <?php $trans = selectAll('transactionz', ['user_id'=> $_GET['user_id']]); ?>
            <h3> Transactions </h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Trans_Id</th>
                        <th>Type</th>
                        <th>status</th>
                        <th>Amount</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($trans as $key => $tran): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $tran['id'] ?></td>
                            <td><?php echo $tran['type'] ?></td>
                            <td><?php echo $tran['status'] ?></td>
                            <td><?php echo $tran['amount'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>

        <div class="table">
        <?php $trans = selectAll('interests', ['user_id'=> $_GET['user_id'], 'type' => 'NFP_Payroll']); ?>
            <h3> Non-Farm PayRolls </h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Trans_Id</th>
                        <th>Type</th>
                        <th>status</th>
                        <th>Amount</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($trans as $key => $tran): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $tran['id'] ?></td>
                            <td><?php echo $tran['type'] ?></td>
                            <td><?php echo $tran['status'] ?></td>
                            <td><?php echo $tran['amount'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>

    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>