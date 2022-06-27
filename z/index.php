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
            
            <i class="fa fa-chevron-left pprev"></i>
            <i class="fa fa-chevron-right nnext"></i>

            <div class="container">
                
                <div class="box one">
                    <div class="image"></div>
                    <div class="content">
                        <h2>Our Strategy Deliver <span>Superior Risk - Adjusted Returns</span>.</h2>
                        <p> Value investing is a fairly simple concept. Executing it, on the other hand, can prove quite difficult for investors. If you're ever feeling intimidated or on the wrong track, it's always a great idea to listen to experienced people.</p>
                        <a href="register/signin.php?signup=1" class="btn"> Join now</a>
                    </div>
                </div>
                <div class="box two">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Our team is made up of <span> Smart and Disciplined </span>People.</h2>
                        <p> “We don’t have to be smarter than the rest. We have to be more disciplined than the rest.” We invest across a diverse range of proprietary trading models which we use on stocks, forex and cryptocurrencies markets. </p>
                        <a href="register/signin.php?signup=1" class="btn"> Join now</a>
                    </div>
                </div>

                <div class="box three">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Our goal seeks to deliver daily <span>maximum profits</span>. </h2>
                        <p> “Your goal as an investor should simply be to purchase, at a rational price, a part interest in an easily understandable business whose earnings are virtually certain to be materially higher 5, 10 and 20 years from now.” </p>
                        <a href="register/signin.php?signup=1" class="btn"> Join now</a>
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

        
        <!-------------- Note Section --------->
        
        <div class="note" id="hero">
            <div class="container">
                <h3>Friendly and Professional</h3>
                <h2>The optimum approach with your money</h2>
                <p>Our Investment Committee brings decades of industry expertise in driving our investment approach, portfolio construction, and allocation advice.</p>
            </div>
        </div>
        
        <!-------------- How we operate --------->
        
        <div class="flex">
            <div class="container">
                <div class="box">
                    <img src="img/user.png">
                    <h3>Account Opening</h3>
                    <p>It takes less than two minutes to open and verify your account through our website</p>
                </div>
                
                <div class="box">
                    <img src="img/settings.png">
                    <h3>Multiple choice of investments</h3>
                    <p>Make a deposit and Invest in any of our many investment options tailored for you .</p>
                </div>
                
                <div class="box">
                    <img src="img/results.png">
                    <h3>Results Based</h3>
                    <p>Our financial specialists are always here to ensure you get the optimum results.</p>
                </div>
                
            </div>
        </div>
        
        
        <!-------------- Offer Section --------->
        
        <div class="about offer">
            <div class="container">
                <div class="left about-image">
                    <h2> Where we invest
                    </h2>
                    
                    <p>
                        We invest in Cryptocurrecies, Stocks and other commodities and ensure our portfolio is diversified properly to meet your financial goals with our professional-grade tools. We Evaluate our asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio. Everything we do is built on work from our dedicated and experienced analysts.
                    </p>
                    
                    <a href="#package">Our Investment Plans</a>
                
                </div>
                
                <div class="right about-content">
                
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
                  "largeChartUrl": "https://amcorassets.com"
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
                    <img src="img/service/service_1.jpg">
                    <h3>Financial Investment</h3>
                    <p>We Mix calls, futures, cryptocurrencies, cash, stocks, commodities, Fx and bonds to find the perfect financial concoction. <br> We Evaluate our asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio in order to return profits to you daily as agreed in our smart contract.</p>
                </div>
                
                <div class="box">
                    <img src="img/service/service_3.jpg">
                    <h3>Cryptocurrency Exchange</h3>
                    <p>Foreign exchange is the trading of one currency for another. For example, one can swap the U.S. dollar for the euro. We provide cryptocurrecny exchange services to our verified members via our many vendors online. Convert your local currency to cryptocurrency easily with us anytime or anyday.</p>
                </div>
                
            
                <div class="box">
                    <img src="img/service/service_4.jpg">
                    <h3>Financial Advisory</h3>
                    <p> We provide consulting and advice for your  finances. Our professional analysts help individuals and companies reach their financial goals sooner by providing their clients with strategies and ways to create more wealth. We  help you with all types of financial planning. That means we can help you with everything from budgeting to saving for retirement.</p>
                </div>
            </div>
            
        </div>

        
        <!-------------- Plans section --------->
        
        <div class="package" id="package">
            <h1>OUR TRADING INVESTMENT PLANS</h1>
            <div class="container">
                <div class="box">
                    
                    <h2>Basic 
                        <span>$100+</span>
                        <span>8.0% daily profit</span>
                    </h2>
                    <p>Minimum : $100</p>
                    <p>Maximum : $999</p>
                    <p>8days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div>
                
                <!-- <div class="box">
                    <h2>Regular
                        <span>$1,000+</span>
                        <span>10.0% daily profit</span>
                    </h2>
                    <p>Minimum : $1,000 </p>
                    <p>Maximum : $4,999</p>
                    <p>8days Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>24/7 Customer Support</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                    <a href="register/signin.php">Invest Now</a>
                </div> -->
                
                <div class="box">
                    <h2>Standard
                        <span>$1,000+</span>
                        <span>15.0% daily profit</span>
                    </h2>
                    <p>Minimum : $1,000 </p>
                    <p>Maximum : $9,999</p>
                    <p>8days Smart Contract</p>
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
                    <h2>Premium
                        <span>$10,000+</span>
                        <span>25.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10,000 </p>
                    <p>Maximum : <b>$10,000 PLUS</b></p>
                    <p>8days Smart Contract</p>
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
                    <option>Basic</option>
                    <option>Standard</option>
                    <option>Premium</option>

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
        
        <!-------------- Carousel testimony ------->
        
        <div class="testimony scroller_target" id="testimonial">
            
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <h1>Feedback from Investors</h1>
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