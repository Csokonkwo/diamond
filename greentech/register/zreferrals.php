<?php 
require_once 'server/users.php';

if(!isset($_SESSION['id'])){
    header('location: signin.php');
    exit();
}

$walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);
$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);
$userProfile = selectOne('users', ['id'=> $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referral Page</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>

    <?php include('zheader.php') ?>

        <div class="main">
            <?php if($_SESSION['verified']): ?>
            <div class="indexx">
                <div class="brief-info">
                
                <?php if($userProfile['firstname']):?>
                <div class="fullname"> <?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?> </div>
                <?php else: ?>
                    <div> &nbsp Please Update your profile <a href="processing/update_profile.php" style="color:blue; text-decoration:underline;">here</a> </div>
                <?php endif; ?>

                    <div class="balance">$<?php echo $walletBalance ?>.00</div> 
                   
                    <div class="level">Verified User</div>
                </div>
            </div>
            <?php endif;?>
            
            <div class="basic-info scroller">
                <label style="margin-top:0px;">Referrer ID</label>
                <input type="text" class="basic-input" value="https://greentech.csotech.com.ng/register/signup.php?ref=<?php echo $_SESSION['id'];?> ">
               <br> <p style="text-transform : none;">Your referrals are below</p>
                <table>
                    <thead>
                        <th>S/N</th>
                        <th>Username</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                    <?php foreach ($referrals as $key => $referral): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $referral['username'] ?></td>
                            <td><?php echo $referral['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
        </div>


    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    
    
</body>
</html>