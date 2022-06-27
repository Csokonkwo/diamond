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
                    <div class="large">Investing is essential to Long-term wealth</div>
                    <center>
                    <a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a>
                    <a href="<?php echo BASE_URL . '/register/signup.php'?>" class="reg">Register</a>
                    </center>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/image2.jpg">
                <div class="container">

                    
                    <div class="small">Build your portfolio with professionals</div>
                    <div class="large">Advice that is always in your best interest</div>
                    <center>
                    <a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a>
                    <a href="<?php echo BASE_URL . '/register/signup.php'?>" class="reg">Register</a>
                    </center>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/image3.jpg">
                <div class="container">

                    <div class="small">Don't wait, create opportunity.</div>
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


        
        <!-------------- Note Section --------->
        
        <div class="note" id="hero">
            <div class="container">
                <h3>Solutions for everyone</h3>
                <p>Our Investment Committee brings decades of industry expertise in driving our investment approach, portfolio construction, and allocation advice.</p>
            </div>
        </div>
        
        <!-------------- How we operate --------->
        
        <div class="flex">
            <div class="container">
                <div class="box about-image">
                    <img src="img/user.png">
                    <h3>Account Opening</h3>
                    <p>It takes less than two minutes to open and verify your account through our website.</p>
                </div>
                
                <div class="box">
                    <img src="img/settings.png">
                    <h3>Multiple choice of investments</h3>
                    <p>Make a deposit and Invest in any of our many investment options tailored for you.</p>
                </div>
                
                <div class="box about-content">
                    <img src="img/results.png">
                    <h3>Results Based</h3>
                    <p>Our financial specialists are always here to ensure you get the optimum results.</p>
                </div>
                
            </div>
        
        </div>

        <div class="shares">
            <div class="container">
                <div class="left">
                    <h3>GoldBrick Assets: Stock Trends</h3>
                    <p>“Market quotes change every second, but business evolves steadily. You have ample time to evaluate a business to buy or not to buy. There is no rush.” ― Naved Abdali</p>
                </div>
                <div class="right">
                    <a href="register/signin.php?stock=1">Explore</a>
                </div>
            </div>
        </div>
        <!-------------- Offer Section --------->
        
        <div class="about offer">
            <div class="container">
                <div class="left">
                    <h2> Where we invest
                    </h2>
                    
                    <p>
                    If you're looking for an investment firm to support you during these volatile times, provide disciplined investing strategies and offer straightforward market perspective, then you have come to the right place. <br> We invest in Cryptocurrecies, Stocks and other commodities and ensure our portfolio is diversified properly to meet your financial goals with our professional-grade tools. We Evaluate our asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio. Everything we do is built on work from our dedicated and experienced analysts.
                    </p>
                    
                    <a href="about/plans.php">Our Investment Plans</a>
                
                </div>
                
                <div class="right">
                
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

        <!------------ Advantage section ------------>
            
        <div class="flex_2">
            <div class="wrapper">
                
                <div class="container">
                    <div class="box about-image">
                        <h2>Friendly and Professional</h2>
                        <p>Excellent customer service creates loyal customers for life who are willing to refer your business to friends, family, and colleagues. Providing this type of excellent customer service is what <?php echo $companyRealName ?> customer service department have been doing for years.</p>
                    </div>

                    <div class="box">
                        <h2>Support and Accessibility</h2>
                        <p>We have made customer to staff connection easier and faster by providing live chat support on our website. We have also made Our platform to be easily accessible to everyone. Our customers can talk to us directly via our livechat system on our website.</p>
                    </div>
                    
                    <div class="box about-content">
                        <h2>Tech Support</h2>
                        <p>We have an amazing Tech support team who are responsible for handling account errors, user issues and any other technical challenge that prevents out customers from accessing our platform. High-quality technical experts with knowledge and experience in the field of internet technologies.</p>
                    </div>
                </div>
                
                <div class="container">
                    <div class="box about-image">
                        <h2>Account Security </h2>
                        <p>We have a hot wallet technology developed by the best security team. Strong encripted password to your personal account which makes your account accessible by you alone. Your email can also allow you to recover your account if your mobile or computer was stolen.</p>
                    </div>

                    <div class="box">
                        <h2>Professional Market Traders</h2>
                        <p>A professional trader is defined by how he approaches his trading mentally and how he manages his trading routine day to day. We have a team of professional market traders who are profitable trading with cryptocurrency on the most popular world exchanges.</p>
                    </div>
                    
                    <div class="box about-content">
                        <h2>Officially Registered</h2>
                        <p>Working as a subsidiary of Amcor Our company is Officially registered in the United Kingdom and as a result promotes the legalization of our business and attract investment to modernize our mining centers.</p>
                    </div>
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
        
        <div class="partners">
            
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