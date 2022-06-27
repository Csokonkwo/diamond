<?php

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$counterInfo = selectOne('info', ['id' => 1]);
$pageName = 'About us';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/head.php"); ?>
    <link rel="stylesheet" href="css/oabout.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>

    <!-------------- Hero Section --------->

    <?php include(ROOT_PATH . "/includes/hero.php"); ?>
        
        
    <!-------------- About Section --------->
    <div id="about">
        <div class="about-other">
            <div class="container">
                <div class="left">
                    <h2>Who <span>we are</span></h2>
                    <p> For over 2 years, our clients, boards and partners count on <?php echo $companyName ?> Partners to enhance their corporate journeys through leveraging our unique experience, judgment and robust network across a wide range of corporate conditions, financing challenges, and industry segments. Our experience spans tens of unique experiences across both principal and consulting roles - in the process, we have strengthened our relationships, raising hundreds of millions for their companies, building boards, enhancing strategic planning, and empowering corporate development success. 

<?php echo $companyName ?> Partners provides its clients and partners with unique, valuable, wholistic, actionable counsel across capital structure (liquidity, capital raising), investor relations, direct investment and M&A, corporate strategies, board formation and participation, negotiations, and documentation. 

We also work with highly seasoned third-party vendor relations (lawyers, bankers, investors, financiers, private bankers, agencies, and boards).
                    </p>
                    <img src="img/about_2.jpg">
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
                <img src="img/about_3.jpg">
                <div class="right">
                    <h2>Our Mission</h2>
                    <p> Our mission is to cater to, and fulfill, the unique needs of our family office, private investor, and founder clients and partners who gain our trust based on our commitment to integrity, dedication, creativity, and excellence in what we do. 

                    Our priorities are to provide unbiased, useful, effective advice, empower the journey of our partners, and the proper capitalization required to actualize their dreams and missions, to augment the legacies of passion, wealth, and brands of those we collaborate with.. </p>
                </div>
            </div>

        </div>

         <div class="mission-other counter_target">
            <div class="container">

                <div class="left">
                    <h2>Our Vision</h2>
                    <p> Our vision is to be a trusted partner for our clients and a respected leader in global asset management. </p>
                </div>

                <img src="img/about_4.jpg">
            </div>

        </div>


        <!-------------- Counter section --------->
        
        <div class="flex counter">
            <div class="container">
                <div class="box">
                    <p id="online_investor"></p> 
                    <p>Investors Online</p>
                </div>
                
                <div class="box">
                    <p id="total_investor"></p>
                    <p>Total Investors </p>
                </div>
                
                <div class="box">
                    <p id="total_withdrawals"></p>
                    <p>Total Withdrawals</p>
                </div>
                
                <div class="box">
                    <p id="total_deposits"></p>
                    <p>Total Deposits</p>
                </div>
            </div>
        
        </div>

        <div class="cert">
            <img src="img/cert.png">
        </div>
        
    </div>

       
        
    </main>
    <script src="js/counter.js"></script>
    <script> 
        //FOR COUNTER
        const countOne = new CountUp("online_investor", 0, <?php echo $counterInfo['investors_online']; ?>);
        const countTwo = new CountUp("total_investor", 0, <?php echo $counterInfo['total_investors']; ?>);    
        const countThree = new CountUp("total_withdrawals", 0, <?php echo $counterInfo['total_withdrawals']; ?> );
        const countFour = new CountUp("total_deposits", 0, <?php echo $counterInfo['total_deposits']; ?>);

        var counterPos = document.querySelector(".counter_target");
        var counterSticky = counterPos.offsetTop;

    </script>
    
    <?php include("includes/footer.php"); ?>
    
</body>
</html>