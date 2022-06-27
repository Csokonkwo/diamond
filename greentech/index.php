<?php 

include('path.php');
include('database.php');
$companyName = 'Greentech'; 

$news = selectAll('posts', ['published' => 1]);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $companyName; ?></title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/widget.css">
    <link rel="stylesheet" href="css/choose.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    
<body>

    <?php include('includes/header.php') ?>
    
    <!------------ Hero section starts here ------------>
    
    <main>
        <div class="hero">

            <div class="slider">
                <img src="img/b1.jpg" alt="…" />
                <img src="img/b2.jpg" alt="…" />
                <img src="img/b3.jpg" alt="…" />
            </div>

           <div class="hero-container"> 
               <div class="hero-big-head"> A richer journey that leads to success, enjoy the possibilities with us today. </div>

               <div class="hero-head">
                    <span>Smart contracts</span>

               </div>

                <br>
               <a href="" class="btn-big gradient" id="hero-effect"> Join us</a>

            </div>
        </div>

        <!-------------- About ----------------->

        <div class="about">

            <div class="about-container">
                <div class="about-head">Welcome to <?php echo $companyName; ?> </div>
                <div class="about-content">
                <?php echo $companyName; ?>  is a Telecommunications company that provides telecommunications services, financial investments and advisory, for the redistribution of monetary values generated therein via several wealth creation means ranging from, wide expanse of commerce, extensive trading in forex, Crypto mining amongst others. 
                   
                    </div>

                <a href="#" class="btn about-btn">Read More</a>
            </div>
        </div>

        <div class="service">

            <div class="service-container">
                <div class="service-box">
                    <div class="box box-1">
                        <div class="box-head">
                            Financial investment
                        </div>
                        <div class="box-content">

                        In line with our resolve to provide elevated living standard of the society, we offer financial investments services to investors, for a 25-35 percent returns on investment after 28 days. 

                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="service-box">
                    <div class=" box box-2">
                        <div class="box-head">
                            Financial advisory
                        </div>
                        <div class="box-content">

                        At<?php echo $companyName; ?>, our finance analysts are trained to offer the best financial advisory to several industries, using the best global standard for the attainment of satisfactory results, both for our firm and our clients. 

                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="service-box">
                    <div class=" box box-3">
                        <div class="box-head">
                            Currency exchange
                        </div>
                        <div class="box-content">

                        In order to reduce the rigours of currency exchange rates for our investors, we have a programmed currency exchange rates, that facilitates the exchange of currencies and cryptocurrencies to your local currency. 
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!----------- Horizontal widget ---------------->

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
        
        <!-------------- Why choose us --------->
        
        <div class="choose">
            <div class="choose-head">Our features</div>
            <div class="choose-content">
                <div class="choose-section choose-about">
                    <div class="choose-sub-head">
                        Security 
                        <i class="fa fa-lock"></i>
                    </div>
                    <p>
                        We have made an easy web interface accessible by all devices to ensure consumers quality customer service experience available all round the clock, at no extra cost.
                        We have also made a hot wallet technology developed by the world's top security team. Strong encripted Password to your personal account and accessible by only you. Fund loss has never occured.
                    </p>

                </div>
                
                <div class="choose-section choose-about">
                    <div class="choose-sub-head">
                        Expert Support
                        <i class="fa fa-headset"></i>
                    </div>
                    <p>
                        We have a 247 customer support agents who are experts and are always available to assist you with all your needs. Our customer care service is available 24/7 on whatsapp to make you understand any of our services.
                        reliability is something we don't joke with.
                    </p>

                </div>
                
                <div class="choose-section choose-about">
                    <div class="choose-sub-head">
                        Referral system
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <p>
                        We have set up an active referral program that will pay you 5% for every transaction you refer to us.
                        You must be a registered member and must be ready to assist your downline through the transaction if the need arises.
                    </p>
                </div>
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
        
         <!------------------converter ---------->
        
        
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
        
        <div class="package">
            <div class="package-head">
                Get started with one of our investment packages.
            </div>
            
            <div class="package-container">
                <div class="package-box">
                    <img src="img/img.png">
                    <div class="package-sub-head">Starter Package</div>
                    <div class="package-content">
                        <span>$45 - $499.9</span>
                        <span>25% profits</span>
                        <span>28days Smart contract</span>
                    </div>
                </div>
                <div class="package-box">
                    <img src="img/img.png">
                    <div class="package-sub-head">Regular Package</div>
                    <div class="package-content">
                        <span>$500 - $2499.9</span>
                        <span>25% profits</span>
                        <span>28days Smart contract</span>
                    </div>
                </div>
                <div class="package-box">
                    <img src="img/img.png">
                    <div class="package-sub-head">Super Package</div>
                    <div class="package-content">
                        <span>$2500 plus</span>
                        <span>30% profits</span>
                        <span>28days Smart contract</span>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="news" id="news">
            <h1>Recent News</h1>
            <?php foreach($news as $newss): ?>
            <div class="news-container">
                <div class="news-image"> <img src="img/b1.jpg" alt=""> </div>
                <div class="news-content">
                    <h2><a href="news.php?id=<?php echo $newss['id'];?>"> <?php echo $newss['title']; ?> </a></h2>
                    <p><?php echo html_entity_decode(substr($newss['body'], 0, 30). '...');?></p>
                    <i><?php echo $newss['user_idd'] ?></i>  <i><?php echo date('F j, Y.', strtotime($newss['created_at'])); ?></i>
                    <a href="news.php?id=<?php echo $newss['id'];?>" class="wid-btn">Read more</a>
                </div>
            </div>
            <?php endforeach; ?>

            
        </div>


        <!---- check footer --->
        <?php include('includes/footer.php') ?>
       
    
</body>
</html>