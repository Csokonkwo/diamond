<?php 

include("../path.php"); 
require("server.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>
        <?php $profile = selectOne('users', ['id' => $_SESSION['id']]) ?>
        <div class="prof">
            <p>Profile</p>
            <p>Wallet_ID : <?php echo $profile['id']; ?> </p>
            <p>Fullname : <?php echo $profile['firstname']; ?> <?php echo $profile['lastname']; ?></p>
            <p>Email: <?php echo $profile['email']; ?></p>
            <p>Referrer: <?php $referrer = selectOne('users', ['id' => $_SESSION['referrer_id']]); if(isset($referrer['username'])){echo $referrer['username'];} ?> </p>
            <p>Gender: <?php echo $profile['gender']; ?></p>
            <p>Phone: <?php echo $profile['phone']; ?></p>
            <p>Country: <?php echo $profile['country']; ?></p>
            <p>Wallet Address: <?php echo $profile['wallet_id']; ?></p>
            <p>Total Deposits: <?php echo $confirmedDeposits; ?></p>
            <p>Total Cashouts: <?php echo $confirmedCashouts; ?></p>
            <p>Total Earned: <?php echo $confirmedInterests; ?></p>
            <p>Referral_link: <br> https://<?php echo $companyEmail; ?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?></p>
            <a class="btn" href="../register/update_profile.php">Update Profile</a>
        </div>
        <br>
        <div class="prof second">
            <p>Security Information</p>
            <p>Password : *** ***</p>
            <p>Reg Date: <?php echo date('F j, Y.', strtotime($profile['created_at'])); ?></p>
            <a class="btn" href="../register/update_password.php">Change Password</a>
        </div>
        
    </main>
    
    <?php include("footer.php"); ?>
    
</body>
</html>