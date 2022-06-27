<?php 

$pageName = 'Sign in';
include("../path.php");

require_once 'server.php'; 

if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    updatePassword($passwordToken);
}

if(isset($_SESSION['id'])){
    header("location: ../app/index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<?php  include("head.php"); ?>

</head>

<body>
   
<header class="clearfix">
        <div class="over-header">
            <p>Welcome to <?php echo $companyName; ?> Financial Services, Make money while you sleep.
                <span> <?php echo date("F j, Y.") ?> </span>
            </p>
        </div>
        
        <div class="middle-header">
            <div class="container">
                <div class="box">
                    <img src="<?php echo BASE_URL.'/img/logo.png' ?>">
                </div>
                
                <div class="box">
                    <div class="box-cont">
                        <div id="google_translate_element"></div>

                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                        }
                        </script>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                </div>
                
                <div class="box none">
                    <div class="box-cont">
                        <img src="<?php echo BASE_URL.'/img/message.png' ?>">
                        <p>Email us at
                            <span>support@<?php echo $companyEmail; ?>.com</span>
                        </p>
                    </div>
                </div>
                
                <div class="box none">
                    <div class="box-cont">
                        <img src="<?php echo BASE_URL.'/img/clock.png' ?>">
                        <p>00:30am – 11:30pm
                            <span>Monday to Sunday</span>
                        </p>
                    </div>
                </div>
            
            </div>
            
        </div>
        
        <ul class="nav">
            <li><a href="<?php echo BASE_URL.'/index.php'?>">Home</a></li>
            <li><a href="<?php echo BASE_URL.'/about.php'?>">About us</a></li>
            <li><a href="<?php echo BASE_URL.'/offer.php'?>">Our services</a></li>
            <li><a href="<?php echo BASE_URL.'/contact.php'?>">Contact us</a></li>
            <li><a href="<?php echo BASE_URL.'/morenews.php'?>">News</a></li>
            <li><a href="<?php echo BASE_URL.'/index.php#testimonial'?>">Testimonials</a></li>
            <li><a href="<?php echo BASE_URL.'/register/signin.php'?>"><i class="fa fa-user"></i> Login</a></li>
            <li><a href="<?php echo BASE_URL.'/register/signup.php'?>"><i class="fas fa-user-edit"></i> Register</a></li>
        </ul>
    
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
    </header>

    <nav>
    <ul class="nav">
            <li><a href="<?php echo BASE_URL.'/index.php'?>">Home</a></li>
            <li><a href="<?php echo BASE_URL.'/about.php'?>">About us</a></li>
            <li><a href="<?php echo BASE_URL.'/offer.php'?>">Our Services</a></li>
            <li><a href="<?php echo BASE_URL.'/contact.php'?>">Contact us</a></li>
            <li><a href="<?php echo BASE_URL.'/morenews.php'?>">News</a></li>
            <li><a href="<?php echo BASE_URL.'/index.php#testimonial'?>">Testimonials</a></li>
            <li><a href="<?php echo BASE_URL.'/register/signin.php'?>"><i class="fa fa-user"></i> Login</a></li>
            <li><a href="<?php echo BASE_URL.'/register/signup.php'?>"><i class="fas fa-user-edit"></i> Register</a></li>
        </ul>
    
    </nav>
    
<main>

    <!-------------- Hero Section --------->
        
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>

<div class="form">
           <div class="container">

                <form action="signin.php" method="POST" onSubmit="return validateForm(this)">
                    <h2>Member Login</h2>
                    
                    <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

                    <div>
                        <i class="fa fa-user"></i>
                        <input id="l_user" type="text" name="user" placeholder="Username or Email" value="<?php echo $user; ?>" oninput="checkLength(this)">
                        <label id="l_user_2" for=""></label>
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input id = "pass" type="password" placeholder="Password" name="password" oninput="checkLength(this)">
                        <label id ="l_pass" for=""></label>
                    </div>

                    <div>
                        <button type="submit" name="log_in" class="btn"> Login</button>
                    </div>

                    <p class="">Not yet a member? <a href="signup.php">Sign up</a></p>
                    
                    <div style="font-size: 0.8em; text-align:center;"><a href="forgot_password.php"> forgot password?</a></div>

                </form>
           </div>
           
           <div class="right"></div>
       </div>

                    </main>


    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>