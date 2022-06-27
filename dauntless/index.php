<?php

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/head.php"); ?>

    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/package.css">
</head>
<body>

    <?php include("includes/header.php"); ?>

    <main>
        
        <!-------------- Hero section --------->
        
        <div class="hero">
            
            <i class="fa fa-chevron-left pprev"></i>
            <i class="fa fa-chevron-right nnext"></i>

            <div class="container">
                
                <div class="box one">
                    <div class="image"></div>
                    <div class="content">
                        <h2>Our Strategy Deliver <span>Superior Risk - Adjusted Returns</span>.</h2>
                        <p> Value investing is a fairly simple concept. Executing it, on the other hand, can prove quite difficult for investors. If you're ever feeling intimidated or on the wrong track, it's always a great idea to listen to experienced people.</p>
                        <a href="register/signup.php" class="btn"> Join now</a>
                    </div>
                </div>
                <div class="box two">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Our team is made up of <span> Smart and welcoming </span>People.</h2>
                        <p> We know how important customer to staff connection is and the impact it has made in the past and thus, we are always available to reply you. Chatting with us directly from out web platform is easier than you think. </p>
                        <a href="register/signin.php" class="btn"> Start Investing today</a>
                    </div>
                </div>
                
            </div>
        </div>

        
        <!-------------- Carousel testimony ------->
        
        <div class="testimony scroller_target" id="testimonial">
            
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <h1>Feedback from our Members</h1>
            <div class="container">
            <?php $testimonials = selectStaz('testimonials', 15, ['published' => 1]); ?>
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="box">
                    <p><?php echo $testimonial['body']; ?></p>
                    
                    <h2><?php echo $testimonial['fullname']; ?></h2>
                    
                    <small> <?php echo $testimonial['city']; ?></small>
                    
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        
        
        <!-------------- Carousel section --------->
        
        <div class="carousel">
            
            <!------- <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i> ------>

            <div class="carousel-container">
                
                <div class="carousel-box">
                    <span><a href="https://coinbase.com"><img src="img/carousel/carousel_1.png" alt=""></a></span>
                </div>
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_2.png" alt=""></a></span> 
                </div>

                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_3.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_4.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_5.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_6.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_7.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_8.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_9.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carousel_10.png" alt=""></a></span>
                </div>
                
            </div>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>
</body>
</html>