<?php

include("../path.php"); 
require("server.php"); 

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    unset($_SESSION['referrer_id']);
    header('location: ../index.php');

    exit();
}

$pageName = "Dashboard";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
</head>

<body>
    <?php include("header.php"); ?>    

        <div class="main-middle">
            <div class="container">
                <div class="box one">
                    <img src="img/balance.png">
                    <p><a href="">Balance</a> ($<?php echo number_format($balance, 2) ?>)</p>
                    <span><?php echo date("M j, Y.") ?></span>
                </div>

                <div class="box two"> <?php $lastDeposit = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'deposit', 'status'=> 'confirmed']) ?>
                    <img src="img/deposit.png">
                    <p><a href="deposits.php">Deposits</a></p>
                    <span><?php if(isset($lastDeposit)){echo date('M j, Y', strtotime($lastDeposit['created_at'])); echo ': $' .number_format($lastDeposit['amount'], 2);} else{ echo "No Confirmed Deposit";} ?></span>
                </div>
                
                <div class="box three"> <?php $lastWithdrawal = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'withdrawal', 'status'=> 'paid']) ?>
                    <img src="img/withdraw.png">
                    <p><a href="withdrawals.php">Withdrawals</a></p>
                    <span><?php if(isset($lastWithdrawal)){echo date('M j, Y', strtotime($lastWithdrawal['created_at'])); echo ': $' .number_format($lastWithdrawal['amount'], 2);} else{ echo "No Confirmed Withdrawal";} ?></span>
                </div>
                
                <div class="box four"> <?php $lastTransfer = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'transfer']) ?>
                    <img src="img/transfer.png">
                    <p><a href="transfers.php">Transfers</a></p>
                    <span><?php if(isset($lastTransfer)){echo date('M j, Y', strtotime($lastTransfer['created_at'])); echo ': $' .number_format($lastTransfer['amount'], 2);} else{ echo "No Confirmed Transfer";} ?></span>
                </div>
                
                <div class="box five"><?php $lastInvestment = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'investment', 'status'=> 'confirmed']) ?>
                    <img src="img/invest.png">
                    <p><a href="investments.php">Investments</a></p>
                    <span><?php if(isset($lastInvestment)){echo date('M j, Y', strtotime($lastInvestment['created_at'])); echo ': $' .number_format($lastInvestment['amount'], 2);} else{ echo "No Confirmed Investment";} ?></span>
                </div>
                
                <div class="box six">
                    <img src="img/history.png">
                    <p><a href="history.php">History</a></p>
                    <span><?php echo date("M j, Y.") ?></span>
                </div>
                
            </div>
        
        </div>
    
        <?php include("footer.php") ?>
    
</body>
    
</html>