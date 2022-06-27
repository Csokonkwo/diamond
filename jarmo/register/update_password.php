<?php 
$pageName = 'User Account';
include("../path.php");
require_once 'server.php'; 

if(!isset($_SESSION['id'])){
    echo 'Not recognized';
    die();
    header('location: signin.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account - Update Password</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/hero.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
   
<?php  include("../includes/header.php"); ?>

<div id="hero" class="hero-other">
        <h1>User Account</h1>
         
    </div>

<div class="form">
        <div class="container">

            <form action="update_password.php" method="POST">
                
                <h3 class="center">Update Password</h3>

                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <div><i class="fa fa-unlock"></i>
                    <input type="password" name="old_password" placeholder="Old Password" class="text-input">
                </div>

                <div><i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="New Password" class="text-input">
                </div>

                <div><i class="fa fa-lock"></i>
                    <input type="password" name="password_2" placeholder="Confirm New Password" class="text-input">
                </div>

                <div>
                    <button type="submit" name="update_password" class="btn"> Update Password</button>
                </div>

                <p class="">Profile? <a href="../app/profile.php"> go to profile</a></p>

            </form>
            
           </div>
           
           <div class="right"></div>
       </div>




    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>