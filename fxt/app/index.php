<?php 
$pageName = 'Dashboard';
include("../path.php");
require ('server.php');

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
    <title><?php echo $companyName ?>/<?php echo $pageName ?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
</head>
    
<body>
    
    <div class="wrapper">
    
    <?php include("header.php") ?>    
        
        

            <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                        ?>
                    </div>
                <?php endif ?>
            
            <div class="dashboard-middle">
                <div class="left">
                    <img src="img/deposit-big.png">
                    <a href="deposits.php">Deposit Now</a>
                </div>
                <div class="right">
                    <p>Dashboard</p>
                    <p>Username <span><?php echo $_SESSION['username'] ?></span></p>
                    <?php if(isset($_SESSION['firstname'])): ?>
                    <p>Fullname <span><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></span></p>
                    <?php else: ?>
                    <p>Fullname <span> Please update your profile</span></p>
                    <?php endif; ?>
                    <p>Email <span><?php echo $_SESSION['email'] ?></span></p>
                    <p>Referrer Name <span><?php echo $_SESSION['referrer_id'] ?></span></p>
                    <p>Referral Link<span>https://travelquick.uk/skyfxt/register/signup.php?ref=<?php echo $_SESSION['username'] ?></span></p>
                    <p>Total Balance <span>$<?php echo $balance; ?></span></p>
                    <p>Total Cashouts <span>$<?php echo $confirmedCashouts; ?></span></p>
                    <p>Total Earnings <span>$<?php echo $confirmedInterests; ?></span></p>

                </div>

            </div>
            
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
            <coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="en"></coingecko-coin-market-ticker-list-widget>
                
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>