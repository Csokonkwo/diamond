<?php

include("path.php");
require("register/server.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@600&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    
    <?php include("includes/header.php") ?>
    
    <main>
        
        <!-------------- Hero section --------->
        
        <div class="hero">

             <div class="slider">
                <img src="img/hero_1.jpg" alt="." />
                <img src="img/hero_2.jpg" alt="…" />
                <img src="img/hero_3.jpg" alt="…" />
                <img src="img/hero_4.jpg" alt="…" />
            </div>
            
            <div class="container">
                <h2>Invest in your future</h2>
                <p>Building wealth is a marathon, not a sprint. Discipline is the key ingredient. </p>
                <a href="register/signup.php">Join us</a>
                
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
        
        <!------------- about section ----------->

        <div class="about">
            <div class="container">
                
                <div class="left">
                    <h2>Buy, Sell and Invest with us</h2>
                    <p><?php echo $companyName; ?> lets you buy, sell or invest cryptocurrencies seamlessly without the drawbacks. We search tirelessly for the best ways to make transactions easier and faster.
                    Our process is designed to build and support strong relationships based on trust. As your trusted advisors, we’ll take responsibilities to bring worthy choicy packages that'll augment your portfolio.

                    </p>
                    
                    <a class="" href="about.php">About us</a>
                </div>
                <div class="right"></div>
            
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
        
        <!------------- services section ----------->
    
        <div class="services">
            <h2>What we offer</h2>
            <div class="container">
                <div class="box">
                    <h3>Financial Guide</h3>
                    <p>Our financial analysts are trained to offer the best services to several industries and trusted financial advice to our firm and clients using global standard for satisfactory results.</p>
                </div>

                <div class="box">
                    <h3>Forex Investments</h3>
                    <p>We have provided innovative ways you can access opportunities to invest your funds without any technical skills. These innovative ways offer a stable 4.5% - 7.5% ROI daily.</p>
                </div>

                <div class="box">
                    <h3>Currency Exchange</h3>
                    <p>In order to reduce the rigours of currency exchange for our investors, we have made exchange of foreign and local currencies easier.All you have to do is contact us via any of our contact links</p>
                </div>

            </div>
        </div>
    
        
        <!------------- Our Trading section ----------->

        <div class="services offer">
            <h2>Our simple Trading system</h2>
            <div class="container">
                <div class="box">
                    <img src="img/wallet.png" alt="wallet">
                    <h3>Create your wallet</h3>
                    <p>You must open an account in order to start trading with us. Click on sign up above and fill the form with valid details, Do not disclose your details to anyone.</p>
                </div>

                <div class="box">
                    <img src="img/payment.png" alt="Payment">
                    <h3>Make Deposit</h3>
                    <p>Here you need some money in your wallet in order to invest or buy any cryptocurrency from us, click on deposit at your dashboard and follow the instructions.</p>
                </div>

                <div class="box">
                    <img src="img/invest.png" alt="Invest">
                    <h3>Invest & Cashout</h3>
                    <p>To invest, click on invest at your dashboard and enter the amount you wish to invest. Cashouts are made available as long as you have sufficient amount in your wallet. </p>
                </div>

            </div>
        </div>

        <?php include("includes/packages.php") ?>
        
        <!------------- features section ---------------->

        <div class="services offer features">
            <h2>Features</h2>
            <div class="container">
                <div class="box">
                    <img src="img/features_1.jpg" alt="Support">
                    <h3>Support <i class="fa fa-headset"></i></h3>
                    <p>We know how important customer to staff connection is and the impact it has made in the past and thus, we are always available to reply you. Chatting with us directly from out web platform is easier than you think.</p>
                </div>

                <div class="box">
                    <img src="img/features_2.jpg" alt="Security">
                    <h3>Security <i class="fa fa-lock"></i> </h3>
                    <p>We have a hot wallet technology developed by the best security team. Strong encripted password to your personal account accessible by you alone. Coin lose has never occured</p>
                </div>

                <div class="box">
                    <img src="img/features_3.jpg" alt="Support">
                    <h3>Accessibility <i class="fa fa-laptop"></i></h3>
                    <p>In order to provide equal access and equal opportunity to people with diverse abilities, We have made an easy web interface comprehensible by all. We also with the aid of Google have been able to translate the contents of our webpage to everyone. </p>
                </div>

            </div>
        </div>


        <div class="buybitcoin">
            <div class="container">
            <p>Earn over 1000$ <span>Our members stand to earn <a>10% </a> on Every referral</span> </p>
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




        <!------------ Stats Section ---------->
        <?php $statds = selectStaz('transactionz', 5, ['type' => 'deposit', 'status' => 'Confirmed']) ?>
        <div class="stats">
            <h1>Recent Statistics</h1>
            
            <div class="container">
                <div class="box">
                    <table>
                        <h4>Lastest Deposits</h4>
                        <thead>
                            <th>Username</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                        </thead>
                        <tbody>
                        <?php foreach ($statds as $key => $statd): ?>
                        <?php $duser = selectOne('users', ['id' => $statd['user_id']]) ?>
                            <tr>
                                <td><?php echo $duser['username'] ?></td>
                                <td><?php echo $statd['payment_method'] ?></td>
                                <td>$<?php echo $statd['amount'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php $statcs = selectStaz('transactionz', 5, ['type' => 'cashout', 'status' => 'paid']) ?>
                <div class="box">
                    <table>
                        <h4>Lastest Cashouts</h4>
                        <thead>
                            <th>Username</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                        </thead>
			<tbody>
                        <?php foreach ($statcs as $key => $statc): ?>
                            <?php $cuser = selectOne('users', ['id' => $statc['user_id']]) ?>
                            <tr>
                                <td><?php echo $cuser['username'] ?></td>
                                <td><?php echo $statc['payment_method'] ?></td>
                                <td>$<?php echo $statc['amount'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
    
    
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo BASE_URL. '/js/carousel.js' ?>"></script>
    
</body>
</html>