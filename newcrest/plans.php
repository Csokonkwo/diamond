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
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>

    <?php include("includes/header.php"); ?>

    <main>
        
        <!-------------- Hero section --------->
        
        <div class="hero">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/image1.jpg">
                <div class="container">
                    <div class="small">You Grow, We Grow.</div>
                    <div class="large">Advice that is always in your best interest</div>
                    <center>
                    <a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a>
                    <a href="<?php echo BASE_URL . '/register/signup.php'?>" class="reg">Register</a>
                    </center>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/image2.jpg">
                <div class="container">

                    
                    <div class="small">Build your business with professionals</div>
                    <div class="large">Counsel to help you stay on track</div>
                    <center>
                    <a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a>
                    <a href="<?php echo BASE_URL . '/register/signup.php'?>" class="reg">Register</a>
                    </center>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/image3.jpg">
                <div class="container">

                    <div class="small">Invest in your future</div>
                    <div class="large">Start investing with us today!</div>
                    <center>
                    <a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a>
                    <a href="<?php echo BASE_URL . '/register/signup.php'?>" class="reg">Register</a>
                    </center>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
        <!-------------- Horinz widget ----------->

        <div style="height:40px; 
                    background-color: #FFFFFF; overflow:hidden; 
                    box-sizing: border-box;  
                    border-radius: 4px; 
                    text-align: right; 
                    line-height:14px; 
                    width: 100%;">
            <div style="height:40px; 
                        padding:0px; 
                        margin:0px; 
                        width: 100%;">
                <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="38px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
            </div>
        </div>

        <!-------------- Plans section --------->
        
        <div class="package" id="package">
            <h1>OUR TRADING INVESTMENT PLANS</h1>
            <div class="container">
                <div class="box">
                    
                    <h2>Beginner 
                        <span>$200+</span>
                        <span>3.0% daily profit</span>
                    </h2>
                    <p>Minimum : $200</p>
                    <p>Maximum : $999</p>
                    <p>7days Smart Contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>Standard
                        <span>$1,000+</span>
                        <span>5.0% daily profit</span>
                    </h2>
                    <p>Minimum : $1,000 </p>
                    <p>Maximum : $9,999</p>
                    <p>7days Smart Contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>Business
                        <span>$10,000+</span>
                        <span>10.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10,000 </p>
                    <p>Maximum : <b>$10,000 PLUS</b></p>
                    <p>7days Smart Contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
            </div>
            
        </div>
        
        <!-------------- Calculator section --------->

        <div class="calculator">
            <div class="container">
                <h3>CALCULATOR</h3>
                <h2>Profit Calculator</h2>
                <p>Thousands of people have made a fortune with our system!</p>
                <p>Enter the amount you want to invest below and get the exact profit return.</p>
                <p>Find a personalized selection of benefits available for you</p>

                <input type="text" class="amount" name="amount" placeholder="Enter amount ($)" onchange="calculate('amount')" />
                
                <select name="plan" placeholder="Select Plan" oninput="calculate('plan')">
                    <option>Beginner</option>
                    <option>Standard</option>
                    <option>Business</option>

                </select>
                

                <div class="field">
                    <label>Profit</label>
                    <div class="interest"><span></span></div>
                </div>

                <div class="field">
                    <label>Total Returns</label>
                    <div class="total"><span></span></div>
                </div>

            </div>
        </div>
        

    </main>

    <?php include("includes/footer.php"); ?>
</body>
</html>