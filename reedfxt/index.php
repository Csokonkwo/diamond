<?php

include("path.php");
require("register/server.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@600&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <title><?php echo $companyName;?>/Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    
<body>

<div id="sub-nav">
        <p>
            <a class="kelee" href=""><i class="fa fa-phone"></i> +1 213 4009 9485</a>
            <a class="kelee" href=""><i class="fa fa-envelope-o"></i> admin@reedfxt.com</a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href="https://wa.me/+15624192187"><i class="fa fa-whatsapp"></i></a>
        </p>
        
        <P>
            <div id="google_translate_element" style=""></div>

        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </P>
    </div>
    
    <header class="clearfix">
        
        <label class="logo"><img src="img/logo.png" alt=""></label>
        
        <ul class="nav">
            <li><a href="<?php echo BASE_URL.'/index.php'?>">Home</a></li>
            <li><a href="<?php echo BASE_URL.'/about.php'?>">About</a></li>
            <li><a href="<?php echo BASE_URL.'/contact.php'?>">Contact</a></li>
            <li><a href="<?php echo BASE_URL.'/faqs.php'?>">FAQ's</a></li>
            <li><a href="<?php echo BASE_URL.'/terms.php'?>">Terms</a></li>
            <li><a href="">Packages</a></li>
            <li><a class="signin">Sign in</a></li>
            
        </ul>
        
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
    </header>
   
    <main>
        
        <!-------------- Hero section --------->

        <div class="hero">

            <div class="slider">
                <img style="filter: brightness(50%);" src="img/hero_1.png" alt="." />
                <img src="img/hero_2.jpg" alt="…" />
                <img style="filter: brightness(50%);" src="img/hero_3.jpg" alt="…" />
                 <img src="img/hero_4.jpg" alt="…" />
            </div>


            <div class="container">
                <div id="typeeffect">
                    <p></p>
                    <p>Utilizing opportunities to proliferate your capital</p>
                    <p>The best management experts for financial liberation</p>
                    <p>Astounding capital gain that ensures our integrity</p>

                </div>

                <p class="hero-intro-1"></p>

                <a class="btn signup" id="hero-effect"> Sign up</a>
            </div>

            
        </div>


        <div id="login" class="form">
                
                <div class="cancel">
                    <span></span>
                    <span></span>
                </div>
                
                <form action="index.php" method="POST" onSubmit="return validateForm(this)">
                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>
                    <input id="l_user" type="text" name="user" placeholder="Username or email" value="<?php echo $user; ?>" oninput="checkLength(this)">
                    <label id="l_user_2"></label>

                    <input id = "pass" type="password" name="password" placeholder="Password" oninput="checkLength(this)">
                    <label id ="l_pass"></label>

                    <button type="submit" name="sign_in">Submit</button>
                    <p>Not yet a member? <a class="signup">Sign up</a> </p>
                    <p> <a href="register/forgot_password.php">Forgot password?</a></p>

                </form>

            </div>

            <div id="register" class="form">
                <div class="cancel">
                    <span></span>
                    <span></span>
                </div>
                
                <form action="index.php" method="POST" onSubmit="return validateReg(this)">
                    <input id="r_user" type="text" name="username" placeholder="Username" oninput="checkLength(this)">
                    <label id="r_user_2"></label>

                    <input id ="emai" type="text" name="email" placeholder="Email" oninput="checkLength(this)">
                    <label id="r_emai"></label>

                    <input id ="r_pass" type="password" name="password" placeholder="Password" oninput="checkLength(this)">
                    <label id ="r_pass_l"></label>

                    <input id ="r_pass_2" type="password" name="password_2" placeholder="Confirm Password" oninput="validatePassword(this)">
                    <label id ="r_pass_2_l"></label>


                    <button type="submit" name="sign_up">Submit</button>
                    <p>Already a member? <a class="signin">Sign in</a> </p>

                </form>

            </div>
        
        <!-------------- services section --------->

        <div class="services">
            <div class="container">
                <div class="box clearfix">
                    <img src="img/services/retirement.png">
                    <div>
                        <h3>Individual Retirement Account (IRA)</h3>
                        <p>An Individual Retirement Account could be the key to a worry-free financial future. At <?php echo $companyName; ?>, we aspire to grow by helping you earmark funds for retirement savings.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <img src="img/services/money.png">
                    <div>
                        <h3>Wealth Planning</h3>
                        <p>Our process is designed to build and support strong relationships based on trust. As your trusted advisors, we’ll take responsibilities to bring worthy choicy packages that'll augment your portfolio.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <img src="img/services/suitcase.png">
                    <div>
                        <h3>Investment Management</h3>
                        <p>Fund Administration and asset servicing have been the core of <?php echo $companyName; ?>’s business for over 15 years. We make investments in security portfolios on behalf of our clients by devising strategies and executing trades within a portfolio.</p>
                    </div>
                    
                </div>
            
            </div>
            
            
            <div class="container">
                <div class="box clearfix">
                    <img src="img/services/customer-service.png">
                    <div>
                        <h3>Client Support</h3>
                        <p><?php echo $companyName;?>’s Client Support team delivers high-quality service to ensure your success. With live phone support, self-service resources and live chat, we make sure to keep in touch attentively with our investors to know how to be of service efficiently.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <img src="img/services/real-estate.png">
                    <div>
                        <h3>Real Estate</h3>
                        <p><?php echo $companyName;?> lets you unlock the benefits of flipping homes or owning rental properties, without the drawbacks. We search tirelessly for the best properties at the best worth using our trusted realtor partners.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <img src="img/services/refund.png">
                    <div>
                        <h3>Forex Trading</h3>
                        <p>Earning some extra income is easier and assured in the largest financial market. Don’t waste your time with the charts & signals, let our experienced brokers apply risk managements and make trades for you since they understand the market professionally.</p>
                    </div>
                    
                </div>
            
            </div>
        
        </div>
        
        <!-------------- Crptocurrency section ------->
        
        <div class="services">
            
            <div class="container">
                <div class="box clearfix">
                    <div>
                        <h3>CRYPTOCURRENCY FOREX</h3>
                        <p>Investments in Cryptocurrencies has grown exponentially over the past few years, making Cryptocurrency trading and investment one of the fastest growing online businesses in the past decade.
                            We support a variety of Cryptocurrencies to trade and invest in including Bitcoin, Ethereum, Litecoin, Ripple and many more.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <video width="100%" controls>
                            <source src="img/video.mp4" type="video/mp4">
                        
                        </video>
                        
                    </div>
                    
                </div>
            
            </div>
            
        
        </div>
        
        <!-------------- Why crpto section --------->

        <div class="services why">
            <h2>Why Cryptocurrency?</h2>
            <p>Learn more about the benefits of Cryptocurrencies</p>
            <div class="container">
                <div class="box clearfix">
                    <div>
                        <h3>Return on Investment</h3>
                        <p>Cryptocurrencies such as Bitcoin were the best performing assets since the financial crisis.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Low Fees</h3>
                        <p><?php echo $companyName; ?> provides investors with the opportunity to invest in cryptocurrency with extremely low commissions.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Secure</h3>
                        <p><?php echo $companyName; ?> assets are held in multi-layered cold storage with military-grade encryption, insured against theft, damage, mysterious disappearance, fraud, and loss from crypto in transit.</p>
                    </div>
                    
                </div>
            
            </div>
            
            
            <div class="container">
                <div class="box clearfix">
                    <div>
                        <h3>Low Transaction Costs</h3>
                        <p>Investing in cryptocurrencies cuts out brokers and middlemen, leading to lower transaction costs and fees.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Inflation Hedge</h3>
                        <p>Cryptocurrencies provide protection against price inflation and the declining purchasing power of the dollar.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Availability</h3>
                        <p>Trader-assisted transactions during extended trading hours.</p>
                    </div>
                    
                </div>
            
            </div>
        
        </div>

        <!-------------- Horinz widget ---------------->
       
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

        <!------------- bitcoin graph------>
        
        <div class="bitcoin-cover">
            <div class="bitcoin-graph">
                <iframe class="bitcoin-iframe" src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" 
                        width="100%" 
                        height="536px" 
                        scrolling="auto" 
                        marginwidth="0" 
                        marginheight="0" 
                        frameborder="0" 
                        border="0">
                </iframe>
            </div>
            
        </div>
        
        <!-------------- About section --------->
        
        <div class="section about">
            <div class="container">

                <div class="about-box about-image"> </div>
                
                <div class="about-box about-content">
                    <h2>About us</h2>
                    <p>
                    <?php echo $companyName;?> is an industry leader in global investment fund administration. The company is a diversified financial services organization headquartered in the United States and has serviced institutional investment managers, global family offices, foundations, endowments and other institutional clients worldwide since 2011. <br> <?php echo $companyName;?>  use modern methods and personal appproach to each client and offer a unique investment model to everyone who wants to use bitcoin not just as a method of payment but also as a reliable source of stable income.<br> As part of our commitment to our client’s satisfaction, we offer 24/7 live customer support, zero charge on all Transactions, an easy and quick cashout and lots more. These, alongside other advantages, set us apart from other financial institutes. 
                    </p>
                    <label for="statis">STATISTICAL & ANALYTIC <span>99%</span></label>
                    <progress id="statis" value="99" max="100"> </progress>
                    
                    <label for="audit">AUDIT PREPARATION <span>96%</span></label>
                    <progress id="audit" value="96" max="100"> </progress>
                    
                    <label for="manag">MANAGEMENT CONSULTING <span>98%</span></label>
                    <progress id="manag" value="98" max="100"> </progress>
                    
                </div>

            </div>

        </div>

        <div class="forex-section">
        
        <!-- forex chart BEGIN -->
        <div class="tradingview-widget-container">

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                  "width": "100%",
                  "height": "400",
                  "currencies": [
                    "EUR",
                    "USD",
                    "JPY",
                    "GBP",
                    "CHF",
                    "AUD",
                    "CAD",
                    "NZD",
                    "CNY"
                  ],
                  "isTransparent": false,
                  "colorTheme": "dark",
                  "locale": "en",
                  "largeChartUrl": "https://greentech.com/index.php"
                }
             </script>
        </div>
    </div>


        <!-------------- We support section --------->
        
        <div class="section about support">
            <div class="container">

                <div class="about-box about-image"> </div>
                
                <div class="about-box about-content">
                    <h2>We Support Your Financial Interest</h2>
                    <p>
                       In finance, an investment strategy is a set of rules, behaviors or procedures, designed to guide an investor’s selection of an investment portfolio. Individuals have different profit objectives, and their individual skills make different tactics and strategies appropriate. Some choices involve a tradeoff between risk and return. Most investors fall somewhere in between, accepting some risk.                    </p>
                    <a href="">Start today</a>
                </div>

            </div>

        </div>
        
        <!------------- Package section ---------------->
    
        <?php include("includes/packages.php") ?>
        
         <!-------------- Features services section --------->

        <div class="services">
            <div class="container">
                <div class="box clearfix">
                    <div>
                        <h3>Licensed Advisors</h3>
                        <p>We know it’s important to get professional guidance you can trust. That’s why our experienced, licensed reps are available by phone, email, chat, and in-person for one-on-one support – when you need it most.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Invest The Way You Want</h3>
                        <p>For over 7 years, <?php echo $companyName;?> has been proud to help our clients pursue their financial goals while giving them more time to focus on what really matters in life. Everything we offer is built around one thing… you! Enjoy the freedom to invest in flexible packages. Whatever your financial goal – we’ll get you there.</p>
                    </div>
                    
                </div>
                
                <div class="box">
                    <div>
                        <h3>Personalized User Dashboard</h3>
                        <p>Our new online platform make it easier than ever to monitor your investments on-the-go. Whether you’re on mobile, desktop, laptop or tablet, you can easily access your account and see everything in a glance. You don’t need any technical skill to run your account, we do all the hard work for you.</p>
                    </div>
                    
                </div>
            
            </div>
        
        </div>
        
         <!------------------- carousel--------------->

        <div class="carousel">
            
            <!------- <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i> ------>

            <div class="carousel-container">
                
                <div class="carousel-box">
                    <span><a href="https://coinbase.com"><img src="img/carousel/blockchain.png" alt=""></a></span>
                </div>
                <div class="carousel-box">
                    <span><a href="#"><img src="img/carousel/carvajal.png" alt=""></a></span> 
                </div>

                <div class="carousel-box">
                <span><a href="#"><img src="img/carousel/cb.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/carousel/equisquare.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/carousel/hbbc.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/carousel/ripple.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/carousel/US-Finance.png" alt=""></a></span>
                </div>
                
            </div>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>
  

    
    
</body>
</html>