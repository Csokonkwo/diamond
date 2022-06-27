<?php 

include("path.php");
include("includes/dbFunctions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Home</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <!-------------- Hero section --------->
    <main>
    <div class="hero">

             <div class="slider">
                <img src="img/hero_1.jpg" alt="." />
                <img src="img/hero_2.jpg" alt="…" />
                <img src="img/hero_3.jpg" alt="…" />
                 <img src="img/hero_4.jpg" alt="…" />
            </div>


            <div class="hero-cover">
                <div id="typeeffect">
                    <p></p>
                    <p>Developing innovative ways to grow your money</p>
                    <p>The best management team for financial solutions</p>
                    <p>Amazing financial profits that verifies our credibility</p>

                </div>

                <div class="hero-container"> 
                   <br>

                    <p class="hero-intro-1"></p>

                    <div class="hero-intro-2" id="hero-intro">
                        <span>B</span>
                        <span>o</span>
                        <span>o</span>
                        <span>s</span>
                        <span>t</span>&nbsp;
                        <span>y</span>
                        <span>o</span>
                        <span>u</span>
                        <span>r</span>&nbsp;
                        <span>i</span>
                        <span>n</span>
                        <span>c</span>
                        <span>o</span>
                        <span>m</span>
                        <span>e</span>

                   </div>
                    <br>
                    <a href="<?php echo BASE_URL.'/register/signup.php'?>" class="hero-intro-more gradient btn-big btn" id="hero-effect"> Join us</a>

                </div>
            </div>
        </div>
    
    
     <!-------------- Horinzon Widget --------->
    
        <div class="horizontal">
            <div class="horizontal-price">

                <iframe 
                        src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" 
                        width="100%" 
                        height="49px" 
                        scrolling="auto" 
                        marginwidth="0" 
                        marginheight="0" 
                        frameborder="0" 
                        border="0" 
                        style="border:0;
                               margin:0;
                               padding:0
                               ;">
                </iframe>

            </div>
        </div>
    
    <!------------- about section ---------------->

        <div class="section">
            <div class="container">

                <div class="box">
                    <div class="center">
                        <div class="image"></div>
                        <div class="beh"></div>
                        <div class="behh"></div>
                    </div>
                </div>
                <div class="box box-2">
                    <div class="">
                        <h2>Recently</h2>
                        <p>
                            The CEO of JARMOINVESTMENT COMPANY LIMITED Dr. John Castro Retired and Replaced with Prof. Marty Cannons. Nov, 12th 2020. <br>
                            JARMOINVESTMENT stocks rises above $145 while it's ROI on platinum package climbs to 7.5%.
                        </p>
                        <a href="<?php echo BASE_URL.'/register/signin.php'?>" class="btn">Sign in</a>
                    </div>
                </div>

            </div>
        </div>
       
        <div class="section about">
            <div class="container">

                <div class="about-box about-image">
                    
                </div>
                <div class="about-box about-content">
                    <h2>About us</h2>
                    <p>
                       <?php echo $companyName; ?> is an online Forex and cryptocurrency STP broker providing trust assets management of the highest quality on the basis of foreign exchange and profitable trade through bitcoin exchanges. <br><?php echo $companyName; ?> Use modern methods and personal appproach to each client and offer a unique investment model to everyone who wants to use bitcoin not just as a method of payment but also as a reliable source of stable income.<br> As part of our commitment to our client’s satisfaction, we offer 24/7 live customer support, zero charge on all Transactions, an easy and quick cashout and lots more. These, alongside other advantages, set us apart from other financial institutes. 
                    </p>
                </div>

            </div>

        </div>

    <!------------- services section ---------------->
    
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
    
    <!------------- features section ---------------->
    
    <div class="services features">
        <h2>Features</h2>
        <div class="container">
            <div class="box">
                <img src="img/security.jpg" alt="Security">
                <h3>Security <i class="fa fa-lock"></i> </h3>
                <p>We have a hot wallet technology developed by the best security team. Strong encripted password to your personal account accessible by you alone. Coin lose has never occured</p>
            </div>
            
            <div class="box">
                <img src="img/support.jpg" alt="Support">
                <h3>Support <i class="fa fa-headset"></i></h3>
                <p>We know how important customer to staff connection is and the impact it has made in the past and thus, we are always available to reply you. Chatting with us directly from out web platform is easier than you think.</p>
            </div>
            
            <div class="box">
                <img src="img/accessibility.jpg" alt="Support">
                <h3>Accessibility</h3>
                <p>In order to provide equal access and equal opportunity to people with diverse abilities, We have made and easy web interface comprehensible by all. We also with the aid of Google have been able to translated the contents of our webpage to everyone. </p>
            </div>
            
        </div>
    </div>

    <!------------- Package section ---------------->
    
    <div class="package">
           
           <h1>
                4.5 - 7.5% ROI daily on our investment packages.
           </h1>
            
            <div class="package-container">
                <div class="package-box">
                    <h2>Silver package </h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>4.5% Daily</p>
                    <p>$200 - $4,999</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>31.5% Earned after 7days</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                </div>
                <div class="package-box">
                    <h2>Gold package</h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>5.8% Daily</p>
                    <p>$5,000 - $9,999</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>40.6% Earned after 7days</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                </div>
                <div class="package-box">
                    <h2>Platinum package</h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>7.5% Daily</p>
                    <p>$10,000 plus</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>52.5% Earned after 7days</p>
                    
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </p>
                </div>
                
            </div>
        </div>

        <section class="calculator">
            <div class="field">
                <label>Select package</label>
                <select name="package" placeholder="Select package" oninput="calculate('package')">
                    <option>silver</option>
                    <option>gold</option>
                    <option>platinum</option>

                </select>
            </div>

            <div class="field">
                <label>Enter Amount</label>
                <input type="text" class="amount" name="amount" placeholder="Enter Amount" onchange="calculate('amount')" />
            </div>

            <div class="field">
                <label>Profit</label>
                <div class="interest"><span></span></div>
            </div>

            <div class="field">
                <label>Total Returns</label>
                <div class="total"><span></span></div>
            </div>
            
       </section>
    
    
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

        <div class="buybitcoin">
            <div class="container">
            <p>Do you want to buy Bitcoin? <span>go to either <a href="https://localbitcoins.com">localbitcoins </a> or <a href="https://coinmama.com">Coinmama</a> </span> </p>
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
                            <th>Date</th>
                        </thead>
                        <tbody>
                        <?php foreach ($statds as $key => $statd): ?>
                        <?php $duser = selectOne('users', ['id' => $statd['user_id']]) ?>
                            <tr>
                                <td><?php echo $duser['username'] ?></td>
                                <td><?php echo $statd['payment_method'] ?></td>
                                <td>$<?php echo $statd['amount'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($statd['created_at'])) ?></td>
                                <td><?php// $ndate = strtotime($statd['created_at']) + 259200; $timeRemaining = $ndate - time() ; $tremaining = $timeRemaining/3600; echo round($tremaining); ?></td>
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
                            <th>Date</th>
                        </thead>
			<tbody>
                        <?php foreach ($statcs as $key => $statc): ?>
                            <?php $cuser = selectOne('users', ['id' => $statc['user_id']]) ?>
                            <tr>
                                <td><?php echo $cuser['username'] ?></td>
                                <td><?php echo $statc['payment_method'] ?></td>
                                <td>$<?php echo $statc['amount'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($statc['created_at'])) ?></td>
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
                    <span><a href="https://coinbase.com"><img src="img/coinbase.jpg" alt=""></a></span>
                </div>
                <div class="carousel-box">
                    <span><a href="https://coinmama.com"><img src="img/coinmama.png" alt=""></a></span> 
                </div>
                <div class="carousel-box">
                    <span><a href="https://blockchain.com"><img src="img/blockchain.png" alt=""></a></span>
                </div>

                <div class="carousel-box">
                <span><a href="https://norton.com"><img src="img/norton.png" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/corax.jpg" alt=""></a></span>
                </div>
                
                <div class="carousel-box">
                <span><a href="#"><img src="img/etherium.png" alt=""></a></span>
                </div>
                
            </div>
        </div>
        
       
    </main>
    
    <?php include("includes/footer.php"); ?>
   
    <script src="js/scroll-out.js"></script>
    <script> ScrollOut({
            targets: ".about-content, .about-image"
        }) </script>
    
</body>
</html>