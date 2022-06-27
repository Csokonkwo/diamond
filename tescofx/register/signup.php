<?php 
$pageName = 'User Account';
include("../path.php");
require_once 'server.php'; 

if(isset($_GET['ref'])){
    $ref = $_GET['ref'];
}

else{
    $ref = 'N/A';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account - Signup</title>

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

<div id="hero" class="hero-other">
        <h1>User Account</h1>
         
    </div>

<div class="form">
           <div class="container">

                <form action="signup.php" method="POST" onSubmit="return validateReg(this)">
                
                    <h3 class="center">Member Registration</h3>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div>
                        <i class="fa fa-user"></i>
                        <input id="r_user" type="text" name="username" placeholder="Username" value="<?Php echo $username; ?>" oninput="checkLength(this)">
                        <label id="r_user_2" for=""></label>
                    </div>
                    
                    <input type="hidden" name="referrer_id" value="<?php echo $ref ?>">

                    <div>
                        <i class="fa fa-envelope"></i>
                        <input id ="emai" type="email" name="email" placeholder="Email" value="<?Php echo $email; ?>" oninput="checkLength(this)">
                        <label id="r_emai" for=""></label>
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input id ="r_pass" type="password" name="password" placeholder="Password" oninput="checkLength(this)">
                        <label id ="r_pass_l" for=""></label>
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input id ="r_pass_2" type="password" name="password_2" placeholder="Confirm Password" oninput="validatePassword(this)">
                        <label id ="r_pass_2_l" for=""></label>
                    </div>

                    <div>
                        <button type="submit" name="sign_up" class="btn"> Sign Up</button>
                    </div>

                    <p class="">Already a member? <a href="signin.php">Sign in</a></p>
                </form>
                
           </div>
           
           <div class="right"></div>
       </div>




    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>