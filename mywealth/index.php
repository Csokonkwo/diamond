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

                <div class="box three">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Our system is <span>Secured and Accessible</span> by Everyone. </h2>
                        <p> We have a hot wallet technology developed by the best security team and is easily accessible from anywhere and any device. Strong encripted password to your personal account accessible by you alone. Lose has never occured. </p>
                        <a href="register/signin.php?signup=1" class="btn"> Login Account</a>
                    </div>
                </div>
                
                <div class="box four">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Over <span>$1 million paid as referral bonus since 2010</span>. </h2>
                        <p> We have set up an active referral program that will pay you 10% for every member you refer to our community. You must be a registered member and must be ready to assist and guide your referrals if the need arises.  </p>
                        <a href="register/signin.php?signup=1" class="btn"> Join now</a>
                    </div>
                </div>
                
                
            </div>
        </div>

        <!-------------- Offer Section --------->
        
        <div class="about offer" id="hero">
            <div class="container">
                <div class="left about-image">
                    <h2> Where we invest
                    </h2>
                    
                    <p>
                        We invest in the best performing cryptocurrency, Forex and real estate. We ensure your portfolio is diversified properly to meet your financial goals with our professional-grade tools. Evaluate your asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio. Everything we do is built on work from our dedicated, experienced analysts.    
                    </p>
                    
                    <a href="#package">Our Investment Plans</a>
                
                </div>
                
                <div class="right about-content">
                
                </div>
            </div>
        
        </div>

        
        <!-------------- Note Section --------->
        
        <div class="note">
            <div class="container">
                <h3>Friendly and Professional</h3>
                <h2>The optimum approach with your money</h2>
                <p>We keep business between our clients and us professional. Your details and credentials are not to be shared with a third party. <br>Our online support agents are friendly and they are here to help and answer your questions anytime.</p>
            </div>
        </div>
        
        <!-------------- How we operate --------->
        
        <div class="flex">
            <div class="container">
                <div class="box">
                    <img src="img/user.png">
                    <h3>Account Opening</h3>
                    <p>It takes less 2 minutes to open your account, chat with our online agents if you encounter any difficulty.</p>
                </div>
                
                <div class="box">
                    <img src="img/settings.png">
                    <h3>Multiple choice of investments</h3>
                    <p>Invest in any of our many investment options ranging from forex trading to real estate investments.</p>
                </div>
                
                <div class="box">
                    <img src="img/results.png">
                    <h3>Results Based</h3>
                    <p>With our Professional traders and realtor you are rest assured that we will help you achieve your financial goals.</p>
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
                    "colorTheme": "light",
                    "locale": "en",
                    "largeChartUrl": "https://growthcapassets.com"
                    }
                </script>
            </div>
        </div>

        <!-- TradingView Widget END -->
        
        <!-------------- Services section --------->
        <br>
        <div class="flex service">
            <h1>Our Services</h1>
            <div class="container">
                
                <div class="box">
                    <img src="img/service/service_3.jpg">
                    <h3>Financial Investments</h3>
                    <p> In line with our resolve to provide elevated living standard of the society, we offer financial investments services to investors, for a minimum of 52 percent returns on investment after 15 days.</p>
                </div>

                <div class="box">
                    <img src="img/service/service_1.jpg">
                    <h3>Financial Advisory</h3>
                    <p>At <?php echo $companyName ?>, our finance analysts are trained to offer the best financial advisory to several industries, using the best global standard for the attainment of satisfactory results, both for our firm and our clients. </p>
                </div>
            
                <div class="box">
                    <img src="img/service/service_4.jpg">
                    <h3>Currency Exchange</h3>
                    <p>In order to reduce the rigours of currency exchange rates for our investors, we have a programmed currency exchange rates, that facilitates the exchange of currencies and cryptocurrencies to your local currency. </p>
                </div>
            </div>
            
        </div>

        
       <!-------------- Packages section --------->
        
       <div class="package" id="package">
            <h1>OUR TRADING INVESTMENT PLANS</h1>
            <div class="container">
                <div class="box">
                    
                    <h2>Basic 
                        <span>$4+</span>
                        <span>3.5% daily profit</span>
                    </h2>
                    <p>Minimum : $4</p>
                    <p>Maximum : $9</p>
                    <p>15days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 5% </p>
                    <p>Capital Return: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>STARTER
                        <span>$10+</span>
                        <span>4.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10 </p>
                    <p>Maximum : $19</p>
                    <p>15days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 5% </p>
                    <p>Capital Return: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>STANDARD
                        <span>20+</span>
                        <span>4.2% daaily profit</span>
                    </h2>
                    <p>Minimum : $20 </p>
                    <p>Maximum : $49</p>
                    <p>15days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 5% </p>
                    <p>Capital Return: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <div class="box">
                    <h2>PREMIUM
                        <span>$50+</span>
                        <span>4.0% daily profit</span>
                    </h2>
                    <p>Minimum : $50 </p>
                    <p>Maximum : $1,000</p>
                    <p>15days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 10% </p>
                    <p>Capital Return: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
            </div>
            
            <br>
            
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
                    <option>Basic</option>
                    <option>Starter</option>
                    <option>Standard</option>
                    <option>Premium</option>

                </select>
                

                <div class="field">
                    <label>Total Profits</label>
                    <div class="interest"><span></span></div>
                </div>

                <div class="field">
                    <label>Total Returns</label>
                    <div class="total"><span></span></div>
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
        
         <!------------- bitcoin graph ----------->
        
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

        <!-------------- News section --------->
        
        <div class="flex news">
        <?php $news = selectStaz('news', 3, ['published' => 1]); ?>
            <h1>RECENT NEWS</h1>
            <div class="container">
                <?php foreach ($news as $new): ?>
                <div class="box">
                    <div class="post">
                        <h2><a href="news.php?id=<?php echo $new['id'] ?>"><?php echo $new['title'] ?></a></h2>
                        <p><?php echo html_entity_decode(substr($new['body'], 0, 90). '...'); ?></p>

                        <p><span> <i class="fa fa-user"></i> <?php echo $new['username'] ?>,</span> <span> <i class="fa fa-calendar"></i> <?php echo date('F j, Y.', strtotime($new['created_at']));?></span></p>
                        
                    </div>
                    <img src="admin/img/<?php echo $new['image'] ?>">
                </div>
                <?php endforeach;?>
            
            </div>
            <a class="btn" href="morenews.php">More <i style="font-size: .7em;" class=" fa fa-arrow-right"></i> </a>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>
</body>
</html>