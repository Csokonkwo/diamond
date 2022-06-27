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

<?php include("head.php") ?>

<body>
    
<?php include("header.php");  ?>


    
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

        <div class="operation">
            <h3>Quick Actions  <?php if($_SESSION['admin'] >= 3): ?> <span><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></span> <?php else: ?> <span> <?php if($ban['settings'] == 1): ?> <a href="index.php?mode=0">Light mode</a> <?php else: ?> <a href="index.php?mode=1">Dark mode</a> <?php endif; ?> </span> <?php endif; ?>
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
                    <a href="withdraw.php"><img src="img/withdraw.png"></a>
                    <p><a href="withdraw.php">Withdraw</a></p>
                </div>
                
                <?php if($_SESSION['admin'] >= 5): ?>
                <div class="box">
                    <a href="transfer.php"><img src="img/transfer.png"></a>
                    <p><a href="transfer.php">Transfer</a></p>
                </div>
                <?php else: ?>
                    <div class="box">
                    <a href="referrals.php"><img src="img/refer.png"></a>
                    <p><a href="referrals.php">Referrals</a></p>
                </div>
                <?php endif; ?>
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

                if($transaction['type'] == ('withdrawal'  || 'charges')){
                    $image="withdraw.png";
                    $color ="red";
                }

                if($transaction['type'] == 'investment'){
                    $image="invest.png";
                    $color='blue'; 
                }

                if($transaction['type'] == 'referral'){
                    $color='green'; 
                    $image="refer.png";
                }

                if($transaction['status'] == 'sent'){
                    $color='red'; 
                    $image="transfer.png";
                }

                if($transaction['status'] == 'received'){
                    $color='green'; 
                    $image="transfer.png";
                }


                ?>
                
                <img src="img/<?php echo $image ?>" alt="">
                
                <div class="box clearfix">
                    <h4 style="text-transform:capitalize"><?php echo $transaction['type'] ?> - <span><?php echo $transaction['id'] ?></span></h4>
                    <h3 style="color: <?php echo $color ?>" >$<?php echo $transaction['amount'] ?></h3>
                    <small><?php echo date('F j, Y.', strtotime($transaction['created_at'])); ?></small>
                    <i><?php echo $transaction['status'] ?></i>
                </div>
                
            </div>
            <?php endforeach; ?>

        </div>
        
    </main>
    
    <?php include("footer.php"); ?>

    <script>
    $(document).ready(function(){
        $('.alert').hide(9000);
    })
    
    </script>

</body>
</html>