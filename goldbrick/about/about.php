<?php

include("../path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = 'About us';

$total_users = selectOneDesc('users', ['verified'=> 1]);
$total_users['id'] = $total_users['id'] - 980000;
$total_withdrawals = pendingDeposits('withdrawal', 'paid');
$total_deposits = pendingDeposits('deposit', 'confirmed');
$total_investments = pendingDeposits('investment', 'confirmed');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include(ROOT_PATH . "/includes/head.php"); ?>
    <link rel="stylesheet" href="../css/oabout.css">
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body>
    
    <?php include(ROOT_PATH . "/includes/header.php"); ?>
    
    <main>

    <!-------------- Hero Section --------->

    <?php include(ROOT_PATH . "/includes/hero.php"); ?>
        
        
    <!-------------- About Section --------->
    <div id="about">
        <div class="about-other">
            <div class="container">
                <div class="left">
                    <h2>Who <span>we are</span></h2>
                    <p>Welcome to the official website of <?php echo $companyRealName;?>. If you're looking for an investment firm to support you during these volatile times, provide disciplined investing strategies and offer straightforward market perspective, then you have come to the right place. Our investment platform is a product of careful preparation and fruitful work of experts in the field of cryptocurrency mining, highly profitable trade in cryptocurrencies and foreign exchanges. Using modern methods of doing business and a personal approach to each client, we offer a unique investment model to investors who want to use cryptocurrencies not only as a method of payment, but also as a reliable source of stable income. <?php echo $companyRealName;?> business uses improved mining equipments and antminers at the most stable markets, which minimizes the risks of financial loss to clients and guarantees them a fixed income accrued every calendar day.</p>

                    <img src="../img/about_2.jpg">
                </div>
                <div class="right">
                    <h2>Our Values</h2>
                    <p> 
                        <b>We do the right thing</b> <br> We act with integrity and put our clients first <br>  <br>

                        <b>We think for the long term</b> <br> We engage in thoughtful decision making and believe that investment excellence should drive our decisions. <br>  <br>

                        <b>We work together to achieve common goals</b> <br> We show respect and humility towards each other and our clients. We believe in creating a supportive work environment that fosters teamwork, collegiality, and effective communication. <br>  <br>

                        <b>We strive for excellence</b> <br> We make the extra effort, practice continuous improvement, and stay flexible to adapt to changing circumstances.<br>  <br>

                        <b>We are committed to employees</b> <br> We foster an environment that provides flexibility and opportunity for growth, while also requiring accountability. <br>  <br>

                        <b>We are independent</b> <br> We will remain a privately owned, independent firm to ensure that we act in the best interest of our clients and employees <br>  <br>

                        <b>We are community minded </b> <br> We support philanthropic giving and encouraging employee volunteerism. <br>  <br>
                    </p>
                </div>
            </div>
        </div>

        <div class="mission">
            <div class="container">
                <img src="../img/about_3.jpg">
                <div class="right">
                    <h2>Our Mission</h2>
                    <p>Our mission is to add value with active portfolio management to help our clients reach their long-term financial goals. This means you get a more disciplined investment strategy and a higher level of service thanks to our roots as an institutional money manager. We achieve this through our investment strategies, adhering to our values and investment principles, and offering employees a challenging and rewarding place to build a career. </p>
                </div>
            </div>

        </div>

         <div class="mission-other counter_target">
            <div class="container">

                <div class="left">
                    <h2>Our Vision</h2>
                    <p> Our vision is to be a trusted partner for our clients and a respected leader in global asset management. </p>
                </div>

                <img src="../img/about_4.jpg">
            </div>

        </div>

        <!-------------- Counter section --------->
        
        <div class="flex counter">
            <div class="container">
                <div class="box">
                    <p id="total_investors"></p> 
                    <p>Total Investors</p>
                </div>
                
                <div class="box">
                    <p id="total_deposits"></p>
                    <p>Total Deposits </p>
                </div>
                
                <div class="box">
                    <p id="total_withdrawals"></p>
                    <p>Total Withdrawals</p>
                </div>
                
                <div class="box">
                    <p id="total_investments"></p>
                    <p>Total Investments</p>
                </div>
            </div>
        
        </div>
        
    </div>

       
        
    </main>
    <script src="../js/counter.js"></script>
    <script> 
        //FOR COUNTER
        const countOne = new CountUp("total_investors", 0, <?php echo $total_users['id']; ?>);
        const countTwo = new CountUp("total_deposits", 0, <?php echo $total_deposits; ?>);    
        const countThree = new CountUp("total_withdrawals", 0, <?php echo $total_withdrawals; ?> );
        const countFour = new CountUp("total_investments", 0, <?php echo $total_investments; ?>);

        var counterPos = document.querySelector(".counter_target");
        var counterSticky = counterPos.offsetTop;

    </script>
    
    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
    
</body>
</html>