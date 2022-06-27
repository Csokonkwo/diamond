<?php 

include('../path.php');
include('server.php');

 $transactions = selectAll('transactionz');  
 
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
        
        <div class="main-middle">
            <div class="container">
                <div class="box one">
                    <img src="../app/img/balance.png">
                    <p><a href="users.php">Users</a> </p>
                    <span><?php echo date("M j, Y.") ?></span>
                </div>

                <div class="box two">
                    <img src="../app/img/history.png">
                    <p><a href="history.php">History</a></p>
                    <span><?php echo date("M j, Y.") ?></span>
                </div>
                
                <div class="box three"> 
                    <img src="../app/img/withdraw.png">
                    <p><a href="withdraw.php">Pending Withdrawals</a></p>
                    <span> <?php echo $pendingWithdrawals ?> </span>
                </div>
                
                <div class="box four">
                    <img src="../app/img/transfer.png">
                    <p><a href="transfers.php">Transfers</a></p>
                    <span><?php if(isset($lastTransfer)){echo date('M j, Y', strtotime($lastTransfer['created_at'])); echo ': $' .number_format($lastTransfer['amount'], 2);} else{ echo "No Confirmed Transfer";} ?></span>
                </div>
                
                <div class="box five">
                    <img src="../app/img/invest.png">
                    <p><a href="invest.php">Investments</a></p>
                    <span> <?php echo $totalInvestments ?> </span>
                </div>

                <div class="box six"> 
                    <img src="../app/img/deposit.png">
                    <p><a href="deposit.php">Pending Deposits</a></p>
                    <span> <?php echo $pendingDeposits ?> </span>
                </div>
                
                
            </div>
        
        </div>
    
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>