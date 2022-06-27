<?php

include("path.php");
include("includes/dbFunctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - About</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@600&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/oabout.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
     <div id="hero" class="hero-other">
        <h1>About us</h1>
         
    </div>
        
        
    <!-------------- About Section --------->
    <div id="about">
        <div class="about-other">
            <div class="container">
                <div class="left">
                    <h2>Who <span>we are</span></h2>
                    <p>Welcome to the website of <?php echo $companyName;?> Our investment platform is a product of careful preparation and fruitful work of experts in the field of Bitcoin mining, highly profitable trade in cryptocurrencies and foreign exchanges. Using modern methods of doing business and a personal approach to each client, we offer a unique investment model to investors who want to use Bitcoin not only as a method of payment, but also as a reliable source of stable income. <?php echo $companyName;?> business uses improved mining equipments and antminers at the most stable markets, which minimizes the risks of financial loss to clients and guarantees them a fixed income accrued every calendar day.</p>

                    <img src="img/about_2.jpg">
                </div>
                <div class="right">
                    <h2>Our VISION</h2>
                    <p>Be the number one self-sustaining investment page that lasts for time and generates profits for users forever.<br> <br>

                    To provide a growth opportunity with an intelligent investment to all our clients.<br> <br>

                    To create equal investment opportunities for large companies and private investors.<br> <br>

                    To develop modern online services to expand the investment opportunities of our clients.<br> <br>

                    Increase cloud mining system more bigger for more profits for our clients.<br> <br></p>
                </div>
            </div>
        </div>

        <div class="mission">
            <div class="container">
                <img src="img/about_3.jpg">
                <div class="right">
                    <h2>We Are On a Mission</h2>
                    <p>If you find yourself here, you are definitely in search of reliable and profitable investment. Yes, you are just at the right place! Our company offers trust assets management of the highest quality on the basis of foreign exchange and profitable trade through Bitcoin exchanges. There is no other worldwide financial market that can guarantee a daily ability to generate constant profit with the large price swings of Bitcoin. Proposed modalities for strengthening cooperation will be accepted by anyone who uses cryptocurrency and knows about its fantastic prospects. Your deposit is working on an ongoing basis, and makes profit every day with the ability to withdraw profit instantly. Join our company today and start making high profits! </p>
                </div>
            </div>

        </div>

         <div class="mission-other">
            <div class="container">

                <div class="left">
                    <h2>We Are On a Mission</h2>
                    <p><?php echo $companyName;?> offers an array of investment products. Our primary focus has been on emerging and rapid growth markets with an emphasis on Bitcoin and other top performing crypto currencies. </p>
                </div>

                <img src="img/about_4.jpg">
            </div>

        </div>

        <div class="cert">
            <img src="img/cert.png">
        </div>
        <div class="cert">
            <img src="img/cert2.png">
        </div>
    </div>

       
        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>