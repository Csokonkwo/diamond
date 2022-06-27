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
                    <img src="img/service/service_3.jpg">
                    <h3>Financial Investments</h3>
                    <p> In line with our resolve to provide elevated living standard of the society, we offer financial investments services to investors, for a 25-35 percent returns on investment after 28 days. gest, momaon trades.</p>
                </div>

                <div class="box">
                    <img src="img/service/service_1.jpg">
                    <h3>Financial Advisory</h3>
                    <p>At <?php echo $companyName ?>, our finance analysts are trained to offer the best financial advisory to several industries, using the best global standard for the attainment of satisfactory results, both for our firm and our clients. </p>
                </div>
            
                <div class="box">
                    <img src="img/service/service_4.jpg">
                    <h3>Currency Exchange</h3>
                    <p>In order to reduce the rigours of currency exchange rates for our investors, we have a programmed currency exchange rates, that facilitates the exchange of currencies and cryptocurrencies to your local currency. </p>
                </div>
            </div>
            
        </div>

        <div><img width="100%" src="img/map.svg" alt=""></div>


        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>