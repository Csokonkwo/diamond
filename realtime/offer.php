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
                    <p>Cryptocurrency are digital assets used in making investments. <?php echo $companyName ?> invests and trades on top cryptocurrencies like Bitcoin, Etherium, Litecoin, Ripple, etc. With the help of our market analysts, our investors make great profits no cryptocurrency exchange can provide.Mode of payment and withdrawal is bitcoin, Etherium, litecoin, ripple.e.t.c Holding cryptocurrency and selling when the value is high is also a form of investment.we are all about helping you reach your financial goal.</p>
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
                    <img src="img/service/service_5.jpg">
                    <h3>Retirement plan</h3>
                    <p>Here you will Deposit a minimum 20% of your salary monthly for the 18 months of the investment period and at the end of the 18 months you get a return of investment of 300% (capital inclusive).It’s pretty much simple and straightforward.First the company will get your details ( name, email,address, ID ) and then prepare a contract Agreement which is registered under the international trade laws to protect your interest as an investor then we will send you an email ito sign then you can make your deposit and you are all set.This particular package is advisable for all salary earners since you all will definitely retire or stop earning the salaries someday So instead of the 401k , IRA, Roth IRA or health savings account where you would just save your money You can save and as well make profits from your retirement savings.</p>
                </div>

                <div class="box">
                    <img src="img/service/service_2.jpg">
                    <h3>Non-Farm Payrolls</h3>
                    <p>We also provide services such as Non-Farm Payroll(NFP). The NFP report contains information on unemployment, job growth and payroll. The NFP report contains information on unemployment, job growth and payroll data, among other stats. The most important statistic that is analyzed is the NFP data, which represents the total number of paid U.S. workers of any business, excluding general government employees, private household employees,employees of non-profit organizations that provide assistance to individuals and farm employees.The NFP comes around occasionally and when it does,we will communicate to our investors.In the NFP trading week,you get 250%-300% of the money you invest in your NFP account.</p>
                </div>
                
            </div>
            
        </div>

        
        <div><img width="100%" src="img/map.svg" alt=""></div>


        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>