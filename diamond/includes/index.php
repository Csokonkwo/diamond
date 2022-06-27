<?php

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include(ROOT_PATH . "/includes/head.php"); ?>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/hero.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/main.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/plan.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/blog.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/flow.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/carousel.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/css/services.css' ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
</head>
<body>
    
    <?php include(ROOT_PATH . "/includes/header.php"); ?>

    <main>

        <!-------------- Hero section --------->
            
        <!-- hero-->
    <div class="hero">
      <div
        id="carouselHero"
        class="carousel slide pointer-event"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/cover1.png" />
            <div class="item-cover">
              <h1>Don't wait, create opportunity.</h1>
              <h3>
                Start Investing with us today.
              </h3>
              <a href="#">Learn More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/cover2.png" />
            <div class="item-cover">
              <h1>You Grow, We grow.</h1>
              <h3>
                With consistency, success will follow.
              </h3>
              <a href="#">Learn More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/cover3.png" />
            <div class="item-cover">
              <h1>Build your portfolio with professionals.</h1>
              <h3>
              Advice that is always in your best interest.
              </h3>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#carouselHero"
          role="button"
          data-slide="prev"
        >
          <!-- <i class="fa fa-angle-left" aria-hidden="true"></i> -->
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselHero"
          role="button"
          data-slide="next"
        >
          <!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
          <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators">
          <li data-target="#carouselHero" data-slide-to="0" class="active"></li>
          <li data-target="#carouselHero" data-slide-to="1"></li>
          <li data-target="#carouselHero" data-slide-to="2"></li>
        </ol>
      </div>
    </div>

        <!-- TradingView Widget BEGIN -->

        <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
        "symbols": [
            {
            "proName": "FOREXCOM:SPXUSD",
            "title": "S&P 500"
            },
            {
            "proName": "FOREXCOM:NSXUSD",
            "title": "US 100"
            },
            {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
            },
            {
            "proName": "BITSTAMP:BTCUSD",
            "title": "Bitcoin"
            },
            {
            "proName": "BITSTAMP:ETHUSD",
            "title": "Ethereum"
            }
        ],
        "showSymbolLogo": true,
        "colorTheme": "light",
        "isTransparent": false,
        "displayMode": "adaptive",
        "locale": "en"
        }
        </script>
        </div>
        <!-- TradingView Widget END -->
         

        <div class="abou">
            <div class="container">
                <div class="box">
                    <h2>About Us</h2>
                    <p>
                        <?php echo $companyRealName ?> is a foremost non-bank finance company offering first class investment plans, financial advisory, corporate finance and Wealth management services to private clients, institutional investors and the clients of financial advisors. <br> <br>
                        Our firm is focused on providing unbaised advisory and investment services to entities and individuals involved in investing in Forex, Real Estate, gold, bond, Stock market and private equities
                    </p>
                </div>
                <div class="box">
                    <div class="content">
                        <h4> <a href="register/signup.php"><i class="fa fa-user"></i> Create an Account</a></h4>
                        <p>
                            Creating an account is a free and painless process. Complete the registration form and get one step closer to earning.
                        </p>
                    </div>
                    
                    <div class="content">
                        <h4> <i class="fa fa-money"></i> Make your Deposit</h4>
                        <p>
                            Continue to make deposits on a range of plans available on your account - as provided by the platform.
                        </p>
                    </div>
                    
                    <div class="content">
                        <h4><i class="fas fa-briefcase"></i> Start Earning</h4>
                        <p>
                            Start earning with a return on investment by the percentage of the plans you made investments on. You also earn referral bonuses and commissions.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="secu">
            <div class="container">
                <h3>Security of business interests at every stage of Cooperation</h3>
                <p>
                    The combination of progressive thinking, the talent of Mr. Smith as both a leader and a business mentor, creates an incredibly fruitful and protected environment for the development of productive and mutually beneficial relations between Capital Advice and its partners. The main underlying factor of such a relationship was the fact that Capital Advice takes its transparency and information accessibility very seriously, which characterizes the prospects and volatility of the company's relationship with partners in the best possible way. We value the trust of customers and are always open both for constructive dialogue and for commercial cooperation based on legal and licensed business activities of the company.
                </p>
            </div>
        </div>
    
    
        <div class="comp">
            <h2>Components of our success</h2>
            <div class="container">
                <div class="box">
                    <div class="content">
                        <h4> <i class="far fa-comment"></i> Live Support 24/7</h4>
                        <p>
                            A team of professionals are always here to support you to ensure smooth and note-worthy experience with us.
                        </p>
                    </div>
                    
                    <div class="content">
                        <h4> <i class="fas fa-chart-line"></i> Trading Efficiency</h4>
                        <p>
                            The high level of training of traders and the use of innovative methods of analytics and monitoring indicative exchange fluctuations allows for maximizing profits.
                        </p>
                    </div>
                </div>
                
                
                <div class="box">
                    <div class="content">
                        <h4> <i class="fas fa-credit-card"></i> Convenient Withdrawals</h4>
                        <p>
                            Withdraw your money in an instant using a wide range of available stress-free payment systems.
                        </p>
                    </div>
                    
                    <div class="content">
                        <h4> <i class="fas fa-award"></i> Award Winning Platform</h4>
                        <p>
                            Award-winning software recognized by the industry’s most respected experts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-------------- Plans ----------->

        <?php include(ROOT_PATH . "/includes/plans.php"); ?>
        
        <div class="secu">
            <div class="container">
                <h3>Affiliate program</h3>
                <p>
                    Affiliate Program opens up additional opportunities for all our investors. By inviting your friends, acquaintances, relatives or colleagues to our Affiliate Program, you earn a guaranteed decent reward for your work! Our Affiliate program offers reward in the amount of 10% from the deposited funds of your referrals.
                </p>
            </div>
        </div>

        <!-------------- Blog 

        <div class="news">
        <div class="container">
            <?php// $news = selectStaz('news', 3 , ['published' => 1]); 
                //foreach($news as $new):
                ?>

            <div class="box">
                <img src="<?php// echo BASE_URL . '/admin/img/blog/'. $new['image']; ?>">
                <h2><a href="about/read_blog.php?id=<?php// echo $new['id'] ?>"><?php// echo $new['title'] ?></a></h2>
                <span style="text-transform: capitalize"><?php// echo $new['username'] ?> • <?php// echo date('F j, Y.', strtotime($new['created_at'])); ?></span>
            </div>
            
        <?php// endforeach; ?>
        </div>
        </div>------------>


        <!------------ Advantage section ------------>
            
        <div class="flex_2">
            <div class="wrapper">
                
                <div class="container">
                    <div class="box about-image">
                        <h2>Friendly and Professional</h2>
                        <p>Excellent customer service creates loyal customers for life who are willing to refer your business to friends, family, and colleagues. Providing this type of excellent customer service is what <?php echo $companyRealName ?> customer service department has been doing for years.</p>
                    </div>

                    <div class="box">
                        <h2>Support and Accessibility</h2>
                        <p>We have made customer to staff connection easier and faster by providing live chat support on our website. We have also made Our platform to be easily accessible to everyone. Our customers can talk to use directly via our livechat system on our website.</p>
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
                        <p>Working as a Cooperative Our company is Officially registered in the United Kingdom and as a result promotes the legalization of our business and attract investment to modernize our mining centers.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-------------- Financial Guides ----------->

        <div class="blog">
            <h1>Recent Articles</h1>
            <div class="container">
            <?php $articles = selectStaz('posts', 3, ['topic_id' =>1 , 'published' => 1]); 
                foreach($articles as $article):

                $user = selectOne('users', ['id' => $article['user_id']]);
            ?>
                <div class="box">
                    <div class="content">
                        <h2><a href="about/single.php?id=<?php echo $article['id'] ?>"> <?php echo $article['title'] ?> </a></h2>

                        <p><?php echo html_entity_decode(substr($article['body'], 0, 100). '...'); ?></p>

                        <span style="text-transform: capitalize"><?php echo $user['username'] ?> • <?php echo date('F j, Y.', strtotime($article['created_at'])); ?></span>
                    </div>

                    <img src="<?php echo BASE_URL . '/admin/guides/img/'. $article['image']; ?>">
                </div>
                <?php endforeach; ?>
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

       
        <!-------------- Carousel section --------->
        
        <div class="partners">
        
        <h2>Our Partners</h2>
        <div class="container">
            
            <div class="box">
                <img src="img/partners/10.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/11.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/13.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/14.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/15.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/16.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/17.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/18.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/19.svg">
            </div>
            
            
            <div class="box">
                <img src="img/partners/20.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/8.svg">
            </div>
            
            <div class="box">
                <img src="img/partners/2.png">
            </div>
            
            <div class="box">
                <img src="img/partners/index.png">
            </div>
            
        
        </div>
    </div>

    <div style="background-color: #205AAC; text-align:center; padding: 50px 20px; color: white;">
            <div class="container">
                <p>
                    Are you looking for where to Buy Bitcoin or other Cryptocurrency? Visit <a href="https://coinjar.com"> CoinJar</a>
                </p>
            </div>
        </div>
    

    </main>

    <script src="js/scroll-out.js"></script>
    <script> ScrollOut({
            targets: ".about-content, .about-image"
        }) </script>

    <?php include(ROOT_PATH . "/includes/footer.php"); ?>

</body>
</html>