<?php 
$pageName = 'User Account';
include("../path.php");
require_once 'server.php'; 

if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    updatePassword($passwordToken);
}

if(empty($_GET)){
    if(isset($_SESSION['id'])){
        header("location: ../app/index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>

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

               <?php if(isset($_GET['signup'])): 
                    if(isset($_GET['ref'])){
                        $ref = $_GET['ref'];
                    }

                    else{
                        $ref = 'N/A';
                    }
                ?>

                <form action="signin.php" method="POST">
                
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
                        <input type="text" name="username" placeholder="Username" value="<?Php echo $username; ?>">
                    </div>
                    
                    <input type="hidden" name="referrer_id" value="<?php echo $ref ?>">

                    <div>
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="<?Php echo $email; ?>">
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password_2" placeholder="Confirm Password">
                    </div>

                    <div>
                        <button type="submit" name="sign_up" class="btn"> Sign Up</button>
                    </div>

                    <p class="">Already a member? <a href="signin.php">Sign in</a></p>
                </form>


                <?php elseif(isset($_GET['forgot_password'])): ?>

                    <form action="signin.php" method="POST">
                        <h3 class="center">Recover Password</h3>

                        <p>Please enter the email address associated with the account you want to recover</p>

                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter Email">
                        </div>

                        <div>
                            <button type="submit" name="forgot_password" class="btn"> Recover Password</button>
                        </div>

                    </form>

                    <?php elseif(isset($_GET['password_message'])): ?> 
                            
                           <p> A recovery email has been sent to your address</p>


                    
               <?php else: ?>

                <form action="signin.php" method="POST">
                    <h2>Member Login</h2>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                    <?php endif; ?>

                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="user" placeholder="Username or Email" value="<?php echo $user; ?>">
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>

                    <div>
                        <button type="submit" name="sign_in" class="btn"> Login</button>
                    </div>

                    <p class="">Not yet a member? <a href="signin.php?signup=1">Sign up</a></p>
                    
                    <div style="font-size: 0.8em; text-align:center;"><a href="signin.php?forgot_password=1"> forgot password?</a></div>

                </form>
                <?php endif; ?>
           </div>
           
           <div class="right"></div>
       </div>




    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>