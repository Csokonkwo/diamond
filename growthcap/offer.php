<?php

include("path.php");
include("includes/dbFunctions.php");
$pageName = 'What we Offer';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/head.php"); ?>
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>
    
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

        <div><img width="100%" src="img/map.svg" alt=""></div>


        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>