<?php 
$pageName = 'User Account';
include("../path.php");
require_once 'server.php'; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account - forgot Password</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/other.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
   
<?php  include("../includes/header.php"); ?>

<!-------------- Hero Section --------->
    
<div id="hero" class="hero-other">
        <h1>User Account</h1>
         
    </div>

<div class="form">
        <div class="container">

           <form action="forgot_password.php" method="POST">
                <h3 class="center">Recover Password</h3>

                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <p>Please enter the email address associated with the account you want to recover</p>

                <div>
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter Email">
                    <label for=""></label>
                </div>

                <div>
                    <button type="submit" name="forgot_password" class="btn"> Recover Password</button>
                </div>

            </form>
                
           </div>
           
           <div class="right"></div>
       </div>




    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>