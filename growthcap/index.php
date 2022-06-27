<?php

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$counterInfo = selectOne('info', ['id' => 1]);


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
        
        <!-------------- Hero Section --------->
        
        <div class="hero" id="hero">

            <div class="slider">
                <img src="img/hero_1.jpg" alt="." />
                <img src="img/hero_2.jpg" alt="…" />
                <img src="img/hero_3.jpg" alt="…" />
                <img src="img/hero_4.jpg" alt="…" />
            </div>
            
            <div class="container">
                <div class="box">
                    
                     <h2>Reliable Investment Platform.</h2>
                    
                    <h1>Our strategy <span> Superior Risk -Adjusted</span> Returns</h1>
                    
                    <p>Finding the best person or organization to invest your money is one of the most important financial decisions you will ever make. Through the economic cycle by investing across a diverse range of proprietary trading models which we use on stocks market, forex and cryptocurrencies markets. </p>
                    
                    <p><a href="register/signin.php">Login</a> <a href="register/signup.php">Register</a> </p>
                    
                </div>
            
            </div>


            
        </div>
        <!-------------- About Section --------->
        
        <div class="about" id="about">
            <div class="container">
                <div class="left">
                    <h2> The very best guidance from our knowledgable and friendly team.
                    </h2>
                    
                    <p>
                        We provide expert financial advice and Investment Packages. Our investment experts constantly evaluate the best ways to put your money to work. Our portfolios are completely liquid, and you can access your money at any time. This is what sets us apart from other competitors.
                    </p>
                    <i>Jude C. Allen, Chairman and CEO</i>
                
                </div>
                
                <div class="right">
                
                </div>
            </div>
        
        </div>
        
        <!-------------- Note Section --------->
        
        <div class="note">
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
                    <p>It takes less than two minutes to open your account through our website</p>
                </div>
                
                <div class="box">
                    <img src="img/settings.png">
                    <h3>Multiple choice of investments</h3>
                    <p>Invest in any of our many investment options.</p>
                </div>
                
                <div class="box">
                    <img src="img/results.png">
                    <h3>Results Based</h3>
                    <p>Our financial specialists ensure you get the optimum results.</p>
                </div>
                
            </div>
        </div>
        
        
        <!-------------- Offer Section --------->
        
        <div class="about offer">
            <div class="container">
                <div class="left about-image">
                    <h2> What we Offer
                    </h2>
                    
                    <p>
                        We ensure your portfolio is diversified properly to meet your financial goals with our professional-grade tools. Evaluate your asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio. Everything we do is built on work from our dedicated, experienced analysts.
                    </p>
                    
                    <a href="#package">Our Investment Packages</a>
                
                </div>
                
                <div class="right about-content">
                
                </div>
            </div>
        
        </div>
        
        
        <!-------------- main-about Section --------->
        
        <div class="about about-main">
            <div class="container">
                <div class="left about-content">
                    <h2> About Us
                    </h2>
                    
                    <p>
                        The Global International Review (GIR) lists <?php echo $companyName; ?> as one of the top Investment Companies in the world and has done so every year since our foundation in 2009. We provide independent advices and investement packages based on established research methods, and our experts have in-depth sector knowledge. Discover how we can give you the bigger picture with insights into a changing market.
                    </p>
                
                </div>
                
                <div class="right about-image">
                    <div>
                        <video width="100%" controls>
                            <source src="img/video.mp4" type="video/mp4">
                        
                        </video>
                        
                    </div>
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
                    <img src="img/service/service_1.jpg">
                    <h3>Cryptocurrency</h3>
                    <p>Cryptocurrency are digital assets used in making investments. <?php echo $companyName; ?> invests and trades on top cryptocurrencies like Bitcoin, Etherium, Litecoin, Ripple, etc. <br> With the help of our market analysts, our investors make great profits no cryptocurrency exchange can provide.</p>
                </div>
                
                <div class="box">
                    <img src="img/service/service_3.jpg">
                    <h3>Forex Trading</h3>
                    <p> Forex trading is the act of buying or selling currencies and it is the largest, most liquid market in the world with an average daily trading volume exceeding $5 trillion. Our company comprises of professional Forex Traders and market analysts, and with the metaTrader4 software, we guarantee maximum profit on trades.</p>
                </div>
                
            
                <div class="box">
                    <img src="img/service/service_4.jpg">
                    <h3>Real estate</h3>
                    <p>Real estate investment involves the purchase, ownership, management, rental and/or sale of real estate for profit. Improvement of realty property as part of a real estate investment strategy is generally considered to be a sub-specialty of real estate investing called real estate development. <?php echo $companyName; ?> helps you secure properties at any location of your choice. </p>
                </div>
            </div>
            <div class="container">
                <div class="box">
                    <img src="img/service/service_2.jpg">
                    <h3>Non-Farm Payroll</h3>
                    <p>We also provide services such as Non-Farm Payroll(NFP) and also give loans to our investors. As a result of the high valued research made already on the market, the profits made tends to be much higher than normal. This is why we offer high returns on investments in a short period of time </p>
                </div>
            
            </div>
        </div>

         <!-------------- bod section ------->
        
         <div class="bod">
            

            <h1>Board of Directors</h1>
            <h2>Meet Our Team</h2>
            <div class="container">
                
                <div class="box">
                    <p>JUDE ALLEN <span>CEO</span></p>
                    
                </div>
                
                <div class="box">
                    <p>JEFFERY LOCKWOOD  <span>Secretary</span></p>
                    
                </div>
                
                <div class="box">
                    <p>RACHEL WATKINS <span>Senior Financial Accountant</span></p>
                    
                </div>
                
                <div class="box">
                    <p>MELEK UMUT <span>Senior Financial Consultant</span></p>
                    
                </div>
                
                <div class="box">
                    <p>SOPHIA WATSON <span>IT Director</span></p>
                    
                </div>
                
                
            </div>
        </div>
        
        
        
        <!-------------- Packages section --------->
        
        <div class="package" id="package">
            <h1>OUR TRADING INVESTMENT PORTFOLIO</h1>
            <h2>CRYPTOCURRENCY INVESTMENT PLANS</h2>
            <div class="container">
                <div class="box">
                    
                    <h2>Beginner 
                        <span>$500+</span>
                        <span>1.5% daily profit</span>
                    </h2>
                    <p>Minimum : $500</p>
                    <p>Maximum : $9,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Standard
                        <span>$10,000+</span>
                        <span>2.0% daily profit</span>
                    </h2>
                    <p>Minimum : $10,000 </p>
                    <p>Maximum : $49,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Advanced
                        <span>$50,000+</span>
                        <span>2.5% daily profit</span>
                    </h2>
                    <p>Minimum : $50,000 </p>
                    <p>Maximum : $99,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Business
                        <span>$100,000+</span>
                        <span>3.0% daily profit</span>
                    </h2>
                    <p>Minimum : $100,000 </p>
                    <p>Maximum : <b>UNLIMITED</b></p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
            
            <br><br> <br>
            
            <h2> REAL ESTATE INVESTMENT PLANS</h2>
            <div class="container">
                <div class="box">
                    
                    <h2>Bronze 
                        <span>49%</span>
                        <span>Monthly profit</span>
                    </h2>
                    <p>Minimum : $10,000</p>
                    <p>Maximum : $49,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Silver
                        <span>58.5%</span>
                        <span>Monthly profit</span>
                    </h2>
                    <p>Minimum : $50,000 </p>
                    <p>Maximum : $99,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Gold
                        <span>66%</span>
                        <span>Monthly profit</span>
                    </h2>
                    <p>Minimum : $100,000 </p>
                    <p>Maximum : $999,999</p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
                    <h2>Platinum
                        <span>75%</span>
                        <span>Monthly profit</span>
                    </h2>
                    <p>Minimum : $1,000,000 </p>
                    <p>Maximum : <b>UNLIMITED</b></p>
                    <p>28days Smart Contract</p>
                    <p>Trades 7 days a week</p>
                    <p>Instant Withdrawal: Yes</p>
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
            
        </div>
        
        <!-------------- Calculator section --------->

        <div class="calculator">
            <div class="container">
                <h3>CALCULATOR</h3>
                <h2>Profit Calculator</h2>
                <p>Thousands of people have made a fortune with our system!</p>
                <p>Enter the amount you want to invest below and get the exact profit return.</p>
                <p>Find a personalized selection of benefits available fro you</p>

                <input type="text" class="amount" name="amount" placeholder="Enter amount ($)" onchange="calculate('amount')" />
                
                <select name="plan" placeholder="Select Plan" oninput="calculate('plan')">
                    <option>Beginner</option>
                    <option>Standard</option>
                    <option>Advanced</option>
                    <option>Business</option>
                    <option>Bronze</option>
                    <option>Silver</option>
                    <option>Gold</option>
                    <option>Platinum</option>

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
        
        <!-------------- Scroller section --------->

        <section class="features counter_target">
            <div class="scroller text">
                <div>
                    <b>TOP 5 INVESTORS (2020) <i style="font-size: .7em;" class=" fa fa-arrow-right"></i> </b> JAMES ROBERT <span>(Texas, U.S.A.)</span> MICHELLE MALLY <span>(London, U.K)</span> LUCIA ESPOSITO<span>(Rome, Italy)</span> NIKKI POLMAN <span>(Amsterdam, Netherlands)</span> MIA OLIVIA <span>(Birmingham, U.K)</span>
                </div>
            </div>
        </section>
        
        
        <!-------------- Counter section --------->
        
        <div class="flex counter">
            <div class="container">
                <div class="box">
                    <p id="online_investor"></p> 
                    <p>Investors Online</p>
                </div>
                
                <div class="box">
                    <p id="total_investor"></p>
                    <p>Total Investors </p>
                </div>
                
                <div class="box">
                    <p id="total_withdrawals"></p>
                    <p>Total Withdrawals</p>
                </div>
                
                <div class="box">
                    <p id="total_deposits"></p>
                    <p>Total Deposits</p>
                </div>
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
            <h1>LATEST NEWS</h1>
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

    <script src="js/counter.js"></script>
    <script> 
        //FOR COUNTER
        const countOne = new CountUp("online_investor", 0, <?php echo $counterInfo['investors_online']; ?>);
        const countTwo = new CountUp("total_investor", 0, <?php echo $counterInfo['total_investors']; ?>);    
        const countThree = new CountUp("total_withdrawals", 0, <?php echo $counterInfo['total_withdrawals']; ?> );
        const countFour = new CountUp("total_deposits", 0, <?php echo $counterInfo['total_deposits']; ?>);

        var counterPos = document.querySelector(".counter_target");
        var counterSticky = counterPos.offsetTop;

    </script>

    <?php include("includes/footer.php"); ?>
    
    
</body>
</html>