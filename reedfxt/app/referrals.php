<?php 

include("../path.php"); 
require("server.php");

$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Referrals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    <?php $refs = checkRefRows('users', $_SESSION['id']); ?>
    
    <main>
        
        <div class="profile">
            <p>Referral Information</p>
            <p>Total Referrals: <?php echo $refs;?> </p>
            <p>Referral earnings: $<?php echo $confirmedReferrals; ?></p>
            <p>Referrer: <?php $referrer = selectOne('users', ['id' => $_SESSION['referrer_id']]); if(isset($referrer['username'])){echo $referrer['username'];} ?></p>
            <p>Referral_link: <br> https://<?php echo $companyName; ?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?></p>
            
        </div>
        
       <br>
        
        <div class="table">
            <h3>Your Referrals</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date</th>

                </thead>

                <tbody>
                    <?php foreach ($referrals as $key => $referral): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $referral['username'] ?></td>
                        <td><?php echo $referral['email'] ?></td>
                        <td><?php echo $referral['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>


            </table>
        </div>
    </main>
    
    <?php include("footer.php"); ?>
    
</body>
</html>