<?php 
require_once 'server/users.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    verifyUser($token);
}

if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    updatePassword($passwordToken);
}

if(!isset($_SESSION['id'])){
    header('location: signin.php');
    exit();

}

if(isset($_POST['resend_verification'])){
    sendVerificationEmail($_SESSION['email'], $_SESSION['token']);
}

$walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);

$userProfile = selectOne('users', ['id'=> $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>

    <?php include('zheader.php') ?>

    
    <div class="main">
            <div class="indexx">
                <div class="brief-info">

                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                        ?>
                    </div>
                <?php endif ?>

                <?php if(!$_SESSION['verified']): ?>
                    <div class="basic-info" style="text-transform: none;">
                        Please go to <strong style="text-transform: capitalize;"><?php echo $_SESSION['email'];?> </strong> to verify your account.
                        <form action="index.php" method="post"> <button type="submit" name="resend_verification" class="btn">Resend link</button> </form>
                    </div>
                <?php endif;?>

                <?php if($_SESSION['verified']):  ?>

                    <?php if(empty($userProfile['firstname'])): ?> <div> &nbsp <?php  echo 'Please Update your profile' ?> <a href="processing/update_profile.php" style="color:blue; text-decoration:underline;">here</a> </div>  <?php endif; ?> 
                        <div class="fullname"> <?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?> </div>
                        
                            <div class="balance">(USD <?php echo $walletBalance; ?>.00)</div> 
                        
                        <div class="level">Verified User</div>
                <?php endif;?>
                </div>
            </div>
       


        <h3>Greentech Easy Access</h3>
        
        <div class="quick-links">
            <div class="box box-1">
            <a href="zdeposit.php"><img src="img/deposit.png"></a>
                <a href="zdeposit.php">Deposit</a>
            </div>
            <div class="box box-2">
                <a href="zreferrals.php"><img src="img/referral.png"></a>
                <a href="zreferrals.php">My Referrals</a>
            </div>
            <div class="box box-3">
            <a href="zwithdraw.php"><img src="img/withdraw.png"></a>
                <a href="zwithdraw.php">Cashout </a>
            </div>
            <div class="box box-4">
            <a href="ztransaction.php"><img src="img/history.png"> </a>
            <a href="ztransaction.php">Transaction History</a>
            </div>
            <div class="box box-5">
            <?php if($userProfile['gender'] == 'female'): ?>
                    <a href="zprofile.php"><img src="img/female.png"></a>
                <?php else: ?>
                    <a href="zprofile.php"><img src="img/male.png"></a>
                <?php endif; ?>
                    <a href="zprofile.php">My Profile</a>
            </div>
            <div class="box box-6">
            <a href="zcurrency.php"><img src="img/currency.png"></a>
            <a href="zcurrency.php">Currency Exchange</a>
            </div>
            <div class="box box-7">
            <a href="https://wa.me/message/7NL5SVDFUAXLL1"><img src="img/consulting.png"></a>
                <a href="https://wa.me/message/7NL5SVDFUAXLL1">Consult us</a>
            </div>
        </div>

        

    
        
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    
    
            
            
    
</body>
</html>