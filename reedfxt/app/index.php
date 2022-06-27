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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@600&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
<?php include("header.php"); ?>


    
    <main>
        
        <div class="operation">
            <h3>Operations  <?php if($_SESSION['admin'] >= 3): ?> <span><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></span> <?php endif; ?>
            </h3>
            <div class="container">
                <div class="box">
                    <a href="deposit.php"><img src="img/deposit.png"></a>
                    <p><a href="deposit.php">Deposit</a></p>
                </div>
                
                <div class="box">
                    <a href="invest.php"><img src="img/invest.png"></a>
                    <p><a href="invest.php">Invest</a></p>
                </div>
                
                <div class="box">
                    <a href="cashout.php"><img src="img/cashout.png"></a>
                    <p><a href="cashout.php">Cashout</a></p>
                </div>
                
                <div class="box">
                    <a href="referrals.php"><img src="img/refer.png"></a>
                    <p><a href="referrals.php">Downlines</a></p>
                </div>
            </div>
        </div>
        
        <div class="transaction">
            <h3>Last transactions</h3>

            <?php $transactions = selectStaz('transactionz', 6, ['user_id' => $_SESSION['id']]) ?>
            <?php foreach($transactions as $transaction): ?>
            <div class="container">
                <?php 
                $image="";
                $color ="";

                if($transaction['type'] == 'deposit'){
                    $image="deposit.png";
                    $color ="green";
                }

                if($transaction['type'] == 'cashout'){
                    $image="cashout.png";
                    $color ="red";
                }

                if($transaction['type'] == 'investment'){
                    $image="invest.png";
                    $color='blue'; 
                }

                if($transaction['type'] == 'interest'){
                    $color='lightgreen'; 
                    $image="cashout.png";
                }


                ?>
                
                <img src="img/<?php echo $image ?>" alt="">
                
                <div class="box clearfix">
                    <h4 style="text-transform:capitalize"><?php echo $transaction['type'] ?> - <span><?php echo $transaction['id'] ?></span></h4>
                    <h3 style="color: <?php echo $color ?>" >$<?php echo $transaction['amount'] ?></h3>
                    <small><?php echo $transaction['created_at'] ?></small>
                    <i><?php echo $transaction['status'] ?></i>
                </div>
                
                
            </div>
            <?php endforeach; ?>

        </div>
        
    </main>
    
    <?php include("footer.php"); ?>

</body>
</html>