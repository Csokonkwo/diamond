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
    <title> <?php echo $companyName; ?> - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/dashboard.css">
    
</head>
<body>
    
    <header>
        <p>Hello, <?php echo $_SESSION['username']; ?> <a href="profile.php"><img src="img/male.png"></a></p>
        
        <div class="balance">$<?php echo $balance; ?>
        </div>
    
    </header>
    
    
    <aside>
        <ul>
        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="cashout.php"><i class="fa fa-dollar"></i> Cashout</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="history.php"><i class="fa fa-history"></i> History</a></li>
            <li><a href="referrals.php"><i class="fa fa-user-plus"></i> Referrals</a></li>
            <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <?php if($_SESSION['admin'] >= 3): ?>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></li>
            <?php endif; ?>
        </ul>
    </aside>
    
    <main>
        <div class="operations clearfix">
            
            <p>Operations <?php if($_SESSION['admin'] >= 3): ?>
            <a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a>
            <?php endif; ?></p>
            <ul>
                <li>
                    <a href="deposit.php"><img src="img/deposit.png"></a>
                    Deposit
                </li>

                 <li>
                    <a href="invest.php"><img src="img/invest.png"></a>
                    Invest
                </li>

                <li>
                    <a href="cashout.php"><img src="img/cashout.png"></a>
                    Cashout
                </li>

                <li>
                    <a href="referrals.php"><img src="img/refer.png"></a>
                    Referrals
                </li>
            </ul>
        </div>
        
        <div class="transactions">
                
            <p>Recent Transactions <span><a href="history.php">View all</a></span></p>
            
            <?php $transactions = selectStaz('transactionz', 4, ['user_id' => $_SESSION['id']]) ?>
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
                    $color='green'; 
                    $image="cashout.png";
                }


                ?>
                
                <img src="img/<?php echo $image ?>" alt="">
                
                <p><?php echo $transaction['type'] ?> <i><?php echo $transaction['id'] ?></i>
                    <span style="color: <?php echo $color ?>">$<?php echo $transaction['amount'] ?></span>
                    <small><?php echo $transaction['status'] ?></small> 
                </p>
                
                
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="operations bottom clearfix">
            
            <ul>
                <li>
                    <a href="index.php"><img src="img/home.png"></a>
                   
                </li>

                 <li>
                    <a href="profile.php"><img src="img/profile.png"></a>
                    
                </li>

                <li>
                    <a href="history.php"><img src="img/history.png"></a>
                   
                </li>

                <li>
                    <a href="index.php?logout=1"><img src="img/signout.png"></a>
                    
                </li>
            </ul>
        </div>
        
        
    </main>
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fe25930df060f156a8f6f83/1eq62oq80';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    
</body>
</html>