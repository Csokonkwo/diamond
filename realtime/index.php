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
        
        <div class="hero" id="hero">
            
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
                        <a href="register/signin.php?signup=1" class="btn"> Start Investing today</a>
                    </div>
                </div>

                <div class="box three">
                    <div class="image"></div>
                    <div class="content">
                        <h2> Our goal seeks to deliver daily <span>maximum profits</span>. </h2>
                        <p> “Your goal as an investor should simply be to purchase, at a rational price, a part interest in an easily understandable business whose earnings are virtually certain to be materially higher 5, 10 and 20 years from now.” </p>
                        <a href="register/signin.php?signup=1" class="btn"> Login</a>
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
        
        
        <!-------------- Offer Section --------->
        
        <div class="about offer">
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
        
        
        <!-------------- main-about Section --------->
        
        <div class="about about-main">
            <div class="container">
                <div class="left about-content">
                    <h2> About Us
                    </h2>
                    
                    <p>
                        <?php echo $companyName ?> is a reliable and diversified investment provider to financial market professionals. Our technical strategies cover equity, cryptocurrencies, commodities and fixed income markets. Our market depth and knowledge are attributed to our acquired experience on trading floors of many banking institutions, spanning across different market spheres ranging from equity, forex, binary options and cryptocurrency trading including real estate and retirement income plans etc.   
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
                    <p>Cryptocurrency are digital assets used in making investments. <?php echo $companyName ?> invests and trades on top cryptocurrencies like Bitcoin, Etherium, Litecoin, Ripple, etc. With the help of our market analysts, our investors make great profits no cryptocurrency exchange can provide.Mode of payment and withdrawal is bitcoin, Etherium, litecoin, ripple.e.t.c Holding cryptocurrency and selling when the value is high is also a form of investment.we are all about helping you reach your financial goal.</p>
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
                    <img src="img/service/service_5.jpg">
                    <h3>Retirement plan</h3>
                    <p>Here you will Deposit a minimum 20% of your salary monthly for the 18 months of the investment period and at the end of the 18 months you get a return of investment of 300% (capital inclusive).It’s pretty much simple and straightforward.First the company will get your details ( name, email,address, ID ) and then prepare a contract Agreement which is registered under the international trade laws to protect your interest as an investor then we will send you an email ito sign then you can make your deposit and you are all set.This particular package is advisable for all salary earners since you all will definitely retire or stop earning the salaries someday So instead of the 401k , IRA, Roth IRA or health savings account where you would just save your money You can save and as well make profits from your retirement savings.</p>
                </div>

                <div class="box">
                    <img src="img/service/service_2.jpg">
                    <h3>Non-Farm Payrolls</h3>
                    <p>We also provide services such as Non-Farm Payroll(NFP). The NFP report contains information on unemployment, job growth and payroll. The NFP report contains information on unemployment, job growth and payroll data, among other stats. The most important statistic that is analyzed is the NFP data, which represents the total number of paid U.S. workers of any business, excluding general government employees, private household employees,employees of non-profit organizations that provide assistance to individuals and farm employees.The NFP comes around occasionally and when it does,we will communicate to our investors.In the NFP trading week,you get 250%-300% of the money you invest in your NFP account.</p>
                </div>
                
            </div>
            
        </div>

        
       <!-------------- Packages section --------->
        
       <div class="package" id="package">
            <h1>OUR TRADING INVESTMENT PLANS</h1>
            <h2>FOREX TRADING PLANS</h2>
            <div class="container">
                <div class="box">
                    
                    <h2>STARTER 
                        <span>$300+</span>
                        <span>5% Weekly profit</span>
                    </h2>
                    <p>Minimum : $300</p>
                    <p>Maximum : $3,999</p>
                    <p>40 weeks Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 3% </p>
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
                    <h2>Basic
                        <span>$4,000+</span>
                        <span>7% Weekly profit</span>
                    </h2>
                    <p>Minimum : $4,000 </p>
                    <p>Maximum : $19,999</p>
                    <p>40 weeks Smart Contract</p>
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
                    <h2>Advanced
                        <span>$20,000+</span>
                        <span>10% Weekly profit</span>
                    </h2>
                    <p>Minimum : $20,000 </p>
                    <p>Maximum : $59,999</p>
                    <p>40 weeks Smart Contract</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>Referral Bonus: 7% </p>
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
                    <h2>Super
                        <span>$60,000+</span>
                        <span>15% Weekly profit</span>
                    </h2>
                    <p>Minimum : $60,000 </p>
                    <p>Maximum : $99,999</p>
                    <p>40 weeks Smart Contract</p>
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
                <p>Find a personalized selection of benefits available for you</p>

                <input type="text" class="amount" name="amount" placeholder="Enter amount ($)" onchange="calculate('amount')" />
                
                <select name="plan" placeholder="Select Plan" oninput="calculate('plan')">
                    <option>Starter</option>
                    <option>Basic</option>
                    <option>Advanced</option>
                    <option>Super</option>
                    <option>Bronze</option>
                    <option>Silver</option>
                    <option>Gold</option>
                    <option>Platinum</option>

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

        <!------------ Stats Section ---------->
        <?php $statds = selectStaz('fakie', 6, ['type' => 'deposit', 'status' => 'confirmed']) ?>

        <div class="stats">
            <h1>Recent Statistics</h1>
            
            <div class="container">
                <div class="box">
                    <table>
                        <h4>Lastest Deposits</h4>
                        <thead>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                        <?php foreach ($statds as $key => $statd): ?>
                            <tr>
                                <td><?php echo $statd['username'] ?></td>
                                <td>$<?php echo $statd['amount'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($statd['created_at'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php $statcs = selectStaz('fakie', 6, ['type' => 'withdrawal', 'status' => 'paid']) ?>
                <div class="box">
                    <table>
                        <h4>Lastest Cashouts</h4>
                        <thead>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </thead>
			<tbody>
                        <?php foreach ($statcs as $key => $statc): ?>
                            <tr>
                                <td><?php echo $statc['username'] ?></td>
                                <td>$<?php echo $statc['amount'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($statc['created_at'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>
</body>
</html>