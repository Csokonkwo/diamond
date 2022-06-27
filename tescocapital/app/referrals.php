<?php

include("../path.php");
require("server.php");
$pageName = "Referrals";
$user = selectOne('users', ['id' => $_SESSION['id']]);
$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include("head.php") ?>
</head>

<body>
    <?php include("header.php") ?>

    <div class="profile"> 
           <div class="container">
               
               <div class="right">
                   <div class="head">
                       <a href="">Referrals</a>
                   </div>
                   
                   <div class="content">
                       <h2>Referral Details</h2>
                       <p>Guider <span><?php $referrer = selectOne('users', ['id' => $_SESSION['referrer_id']]); if(isset($referrer['username'])){echo $referrer['username'];} else{ echo 'None';} ?></span></p>
                       <p>Username <span><?php echo $user['username'] ?></span></p>
                       <p>Total Referrals<span><?php echo count($referrals)?></span></p>
                       <p>Referral Earnings<span>$<?php echo $confirmedReferrals; ?></span></p>
                       <p>Account Balance<span>$<?php echo $balance ?></span></p>
                       <p>
                            Referral Link: <br> <br> <input type="text" id="myInput" value="https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>"> <button onclick="copyItem()">Copy Link</button>
                            <br><br> https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>
                       </p>
                   </div>
               </div>
           
           </div>
        </div>
        
        
        
        <div class="trans">
        <h3>Referral History</h3>
        <?php $shares_trans = selectStaz('transactionz', 10, ['user_id' => $_SESSION['id'], 'type' => 'referral']); ?>
            <div class="container">
                <?php foreach($shares_trans as $shares_tran): ?>
                <div class="box">
                    <div class="left">
                        <span><a><?php echo $shares_tran['type'] ?></a></span>
                        <span>Transaction ID: <?php echo $shares_tran['id'] ?></span>
                        <span>Payment Method:  <?php echo $shares_tran['payment_method'] ?></span>
                    </div>

                    <div class="right">
                        <span>Order <?php echo $shares_tran['status'] ?></span>
                        <span><?php echo date('F j, Y.', strtotime($shares_tran['created_at'])); ?></span>
                        <span>$<?php echo number_format($shares_tran['amount'], 2) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        
        </div>
        
        <?php include("footer.php") ?>
    
</body>
</html>