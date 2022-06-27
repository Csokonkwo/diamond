<?php

include("../path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = 'Plans';


?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include(ROOT_PATH . "/includes/head.php"); ?>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/package.css">
    <link rel="stylesheet" href="../css/oabout.css">
</head>
<body>

<?php include(ROOT_PATH . "/includes/header.php"); ?>

    <main>
        
        <!-------------- Hero section --------->

        <?php include(ROOT_PATH . "/includes/hero.php"); ?>
        
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
            <h2 id="personal-btn">THE PERSONAL PLANS</h2>
            <div id="personal-plan" class="container">
                <div class="box">
                    
                    <h2>Regular 
                        <span>$1000+</span>
                        <span>20.0% daily profit</span>
                    </h2>
                    <p>Minimum : $1,000</p>
                    <p>Maximum : $9,999</p>
                    <p>Total Profits: 100%</p>
                    <p>5days Smart Contract</p>
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
                    <h2>Premium
                        <span>$10,000+</span>
                        <span>50.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10,000 </p>
                    <p>Maximum : $29,999</p>
                    <p>Total Profits: 250%</p>
                    <p>5days Smart Contract</p>
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
                    <h2>VIP
                        <span>$30,000+</span>
                        <span>100.0% daily profit</span>
                    </h2>
                    <p>Minimum : $30,000 </p>
                    <p>Maximum : <b>$100,000</b></p>
                    <p>Total Profits: 500%</p>
                    <p>5days Smart Contract</p>
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

            <h2 id="business-btn">THE BUSINESS PLANS</h2>
            <div id="business-plan" class="container">
                <div class="box">
                    
                    <h2>STANDARD 
                        <span>$10,000+</span>
                        <span>120.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10,000</p>
                    <p>Maximum : $99,999</p>
                    <p>Total Profits: 600%</p>
                    <p>5days Smart Contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>ULTIMATE
                        <span>$100,000+</span>
                        <span>150.0% daily profit</span>
                    </h2>
                    <p>Minimum : $100,000 </p>
                    <p>Maximum : $499,999</p>
                    <p>Total Profits: 750%</p>
                    <p>5days Smart Contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
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
                    <option>Regular</option>
                    <option>Premium</option>
                    <option>Vip</option>
                    <option>Standard</option>
                    <option>Ultimate</option>

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

    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
</body>
</html>