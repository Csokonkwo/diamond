<?php 
$pageName = 'Profile';
include("../path.php");
require ('server.php');


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

            <?php $profile = selectOne('users', ['id'=> $_SESSION['id']]) ?>
            <div class="dashboard-middle profile">
                <div class="right">
                    <p>Your Account</p>
                    <p>Username <span><?php echo $_SESSION['username'] ?></span></p>
                    <?php if(isset($profile['firstname'])): ?>
                    <p>Fullname <span><?php echo $profile['firstname'] ?> <?php echo $profile['lastname'] ?></span></p>
                    <?php else: ?>
                    <p>Fullname <span> Please update your profile</span></p>
                    <?php endif; ?>
                    <p>Email <span><?php echo $_SESSION['email'] ?></span></p>
                    <p>Referrer Name <span><?php echo $_SESSION['referrer_id'] ?></span></p>
                    <p>Referral Link<span>https://travelquick.uk/skyfxt/register/signup.php?ref=<?php echo $_SESSION['username'] ?></span></p>
                    <p>Gender <span><?php echo $profile['gender'] ?></span></p>
                    <p>Phone <span><?php echo $profile['phone'] ?></span></p>
                    <p>Country <span><?php echo $profile['country'] ?></span></p>
                    <a href="../register/update_profile.php">Update Profile</a>

                </div>

            </div>
            
            <div class="dashboard-middle profile">
                <div class="right">
                    <p>Security Information</p>
                    <p>Password <span>*** ***</span></p>
                    <p>Created at <span><?php echo date('F j, Y.', strtotime($profile['created_at'])); ?></span></p>
                    <a href="../register/update_password.php">Change Password</a>
                </div>

            </div>
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>