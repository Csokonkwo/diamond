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
  <link rel="stylesheet" href="<?php echo BASE_URL . '/css/carousel.css' ?>">

</head>

<body>

  <?php include(ROOT_PATH . "/includes/header.php"); ?>

    <main>
        
      <div class="hero">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-touch="true" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/image1.jpg">
                <div class="container">
                  <div class="transp-black">
                    <div class="title">Communication and Counsel</div>
                    <div class="sub space-top-20 space-bottom-20">You get a personal investment counselor committed to understnad and keep your financial plan on track.</div>
                    <a href="<?php echo BASE_URL . '/register/signup.php' ?>" class="space-within-10">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/image2.jpg">
                <div class="container">
                  <div class="transp-black">
                    <div class="title">Portfolio Tailored for your Needs</div>
                    <div class="sub space-top-20 space-bottom-20">We have made our investment plans accessible to everyone and as such everyone can build a portfolio with us.</div>
                    <a href="<?php echo BASE_URL . '/register/signup.php' ?>" class="space-within-10">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/image3.jpg">
                <div class="container">
                  <div class="transp-black">
                    <div class="title">Wealth Development Management</div>
                    <div class="sub space-top-20 space-bottom-20">Our process is designed to build and support strong relationships that'll augment your portfolio.</div>
                    <a href="<?php echo BASE_URL . '/register/signup.php' ?>" class="space-within-10">Get Started</a>
                  </div>
                </div>
              </div>

              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
            </div>
          </div>
      </div>

      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
        {
        "symbols": [
          {
            "proName": "FOREXCOM:SPXUSD",
            "title": "S&P 500"
          },
          {
            "proName": "FOREXCOM:NSXUSD",
            "title": "Nasdaq 100"
          },
          {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
          },
          {
            "proName": "BITSTAMP:BTCUSD",
            "title": "BTC/USD"
          },
          {
            "proName": "BITSTAMP:ETHUSD",
            "title": "ETH/USD"
          }
        ],
        "colorTheme": "light",
        "isTransparent": false,
        "showSymbolLogo": true,
        "locale": "en"
      }
        </script>
      </div>
      
      <!-------------- Blog ------------>

      <div class="news">
        <div class="container">
          <?php $news = selectStaz('news', 3 , ['published' => 1]); 
                foreach($news as $new):
              ?>

            <div class="box">
                <img src="<?php echo BASE_URL . '/admin/blog/'. $new['image']; ?>">
                <h2><a href="about/read_blog.php?id=<?php echo $new['id'] ?>"><?php echo $new['title'] ?></a></h2>
                <span style="text-transform: capitalize"><?php echo $new['username'] ?> • <?php echo date('F j, Y.', strtotime($new['created_at'])); ?></span>
            </div>
            
        <?php endforeach; ?>
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

                  <img src="<?php echo BASE_URL . '/admin/guide/'. $article['image']; ?>">
              </div>
              <?php endforeach; ?>
          </div>
      </div>

        
      <!-------------- Plans ----------->
      
      <?php include(ROOT_PATH . "/includes/plans.php"); ?>
      
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
    
    </main>
    
    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo BASE_URL . '/js/carousel.js' ?>"></script>
    
</body>


</html>