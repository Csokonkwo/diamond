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
     <!-------------- Services section --------->
     <br>
        <div class="flex service">
            <h1>Our Services</h1>
            <div class="container">
                <div class="box">
                    <img src="img/service/service_1.jpg">
                    <h3>Financial Investment</h3>
                    <p>We Mix calls, futures, cryptocurrencies, cash, stocks, commodities, Fx and bonds to find the perfect financial concoction. <br> We Evaluate our asset allocation and sector weightings to uncover concentrated positions and build a more resilient portfolio in order to return profits to you daily as agreed in our smart contract.</p>
                </div>
                
                <div class="box">
                    <img src="img/service/service_3.jpg">
                    <h3>Cryptocurrency Exchange</h3>
                    <p>Foreign exchange is the trading of one currency for another. For example, one can swap the U.S. dollar for the euro. We provide cryptocurrecny exchange services to our verified members via our many vendors online. Convert your local currency to cryptocurrency easily with us anytime or anyday.</p>
                </div>
                
            
                <div class="box">
                    <img src="img/service/service_4.jpg">
                    <h3>Financial Advisory</h3>
                    <p> We provide consulting and advice for your  finances. Our professional analysts help individuals and companies reach their financial goals sooner by providing their clients with strategies and ways to create more wealth. We  help you with all types of financial planning. That means we can help you with everything from budgeting to saving for retirement.</p>
                </div>
            </div>
            
        </div>

        

        <div><img width="100%" src="img/map.svg" alt=""></div>


        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>