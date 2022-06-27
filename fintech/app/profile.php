<?php

$pageName = 'Profile';
include('../path.php');
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>

        <div class="main-container">
                <div class="prof">
                    <?php $userProfile = selectOne('users', ['id'=> $_SESSION['id']]); ?>
                    <img src="img/profile.png">
                    <div>
                        <p><?php echo $_SESSION['username'];?></p>
                        <p><?php echo $_SESSION['email'];?></p>
                    </div>
                </div>
                
                
                
                <div class="basic-info">
                <h3>Basic information</h3>

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                            <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            unset($_SESSION['alert-class']);
                            ?>
                        </div>
                    <?php endif ?>

                    <label>Full name</label>
                    <p><?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?></p> 

                    <label>Current Balance</label>
                    <div class="balance">$<?php// echo $walletBalance; ?>.00</div> 
                        
                    
                    <label>Mobile number</label>
                    <p> <?php echo $userProfile['phone'];?></p>
                    
                    <label>Gender</label>
                    <p> <?php echo $userProfile['gender'];?></p>

                    <label>Country</label>
                    <p> <?php echo $userProfile['country'];?></p>
                    
                    <label>Referrer ID</label>
                    <input type="text" class="basic-input" value="https://greentech.csotech.com.ng/register/signup.php?ref=<?php echo $_SESSION['id'];?> ">
                   
                    <a href="../register/update_profile.php" class="btn"> Update profile </a>
                </div>
                
                <div class="basic-info">
                <h3>Security information</h3>
                    
                    <label> Date Created</label>
                    <p> <?php echo $userProfile['created_at'];?></p>
                    
                    <label> Password</label>
                    <p> ********</p>

                    <a href="../register/update_password.php" class="btn"> Change password </a>
                    
                </div>
            </div>
        </div>

    </main>
    <?php include('footer.php'); ?>
    
</body>
</html>