<?php

include("path.php");
include("includes/dbFunctions.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName;?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/investment.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    
   <?php  include("includes/header.php"); ?>


    <main>
    <!-------------- Hero Section --------->

    <div id="hero" class="hero">
      <i class="fa fa-angle-left" onclick="previous()"></i>
      <i class="fa fa-angle-right" onclick="next()"></i>
      <div class="hero-slider-holder">
        <div class="hero-container" style="background-image: url('img/hero_1.jpg')">
          <div class="content-wrapper">
            <div class="top-tag">Reliable and comfortable trading.</div>
            <h2>Reliable <span>Investment</span> Platform</h2>
            <div class="tagline">
              Finding the best person or organization to invest your money is one of the most important financial decisions you will ever make.
            </div>
          </div>
        </div>

        <div class="hero-container" style="background-image: url('img/hero_2.jpg')">
          <div class="content-wrapper">
            <div class="top-tag">Functional Innovative solutions.</div>
            <h2>Smart <span>Investment</span> Platform</h2>
            <div class="tagline">
              Smart investing doesnt consist of buying good assets but of buying assets well. This is a very very important distinction that very, very few people understand.
            </div>
          </div>
        </div>

        <div class="hero-container" style="background-image: url('img/hero_3.jpg')">
          <div class="content-wrapper">
            <div class="top-tag">High-speed Transactions.</div>
            <h2>Accessible <span>Investment</span> Platform</h2>
            <div class="tagline">
              Anyone who is not investing now is missing a tremendous opportunity.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-------------- About Section --------->
    
    <div class="about">
        <div class="container">
            <h1>About us</h1>
            <p> We are a team of expert forex traders fascinated with the idea of providing a reliable and profitable management system for all our investors. We seek to grow and safeguard the investments of all our clients in the best way to maximize profitability and trust.</p>

            <img src="img/about.png">
            
        </div>
        <div class="under-about"></div>
    </div>
    
    
    <div class="investment">
        <!-------------- Horinzon Widget --------->
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
        
        <!-------------- Investment plans --------->
        
        <?php include("includes/plans.php"); ?>

        <!-------------- Calculator section --------->

    <section class="calculator">
      <div class="field">
        <label>Select Plan</label>
        <select name="plan" placeholder="Select Plan" oninput="calculate('plan')">
            <option>starter</option>
            <option>regular</option>
            <option>standard</option>
            <option>premier</option>
            <option>premium</option>
            <option>deluxe</option>

        </select>
      </div>

      <div class="field">
        <label>Select Amount</label>
        <input type="text" class="amount" name="amount" placeholder="Select Plan" onchange="calculate('amount')" />
      </div>

      <div class="field">
        <label>Profit</label>
        <div class="interest"><span></span></div>
      </div>
      
      <div class="field">
        <label>Total Returns</label>
        <div class="total"><span></span></div>
      </div>
    </section>

    <section class="general">
      
        
    
    </div>
    
    <section class="general">
        
        <!------------ Services Section ---------->
        
        <div class="service">
            <h1>Our Services</h1>
            <div class="container">
                <div class="box">
                    <div class="serv s1"></div>
                    
                    <h2><i class="fa fa-user-plus"></i> Active Referral System </h2>
                    <p>We have set up an active referral program that will pay you 10% for every transaction you refer to us. You must be a registered member and must be ready to assist your downline through the transaction if the need arises.  </p>
                    <a href="" class="btn"> READ MORE</a>
                </div>
                
                <div class="box">
                    <div class="serv s2"></div>
                    <h2><i class="fa fa-headset"></i> Great Customer Support 24/7 </h2>
                    <p>We have a 247 customer support agents who are experts and are always available to assist you with all your needs. Our customer care service is available 24/7 on whatsapp to make you understand any of our services. reliability is something we don't joke with. </p>
                    <a href="" class="btn"> READ MORE</a>
                </div>
                
                <div class="box">
                    <div class="serv s3"></div>
                    <h2><i class="fa fa-lock"></i> Security </h2>
                    <p>We have made an easy web interface accessible by all devices to ensure consumers quality customer service experience available all round the clock, at no extra cost. We have also made a hot wallet technology developed by the world's top security team. Strong encripted Password to your personal account and accessible by you alone.</p>
                    <a href="" class="btn"> READ MORE</a>
                </div>
            </div>
        </div>
        
        <!------------ Frequently asked Section ---------->
        
        <div class="frequent">
            <div id="left" class="left">
                <div class="inside">
                    <h2>Frequently asked questions</h2>
                    <ul>
                       <li><a> How do I open an account?</a></li>
                       <p>To register a new account, simply click the "Register New Account" button or "Sign Up" link and fill out the required information.
                       </p>

                       <li><a> How long does it take for my deposit to be added?</a></li>
                       <p>Your deposit is automatically added after 3 network confirmations for cryptocurrencies but for PM and payeer this be add as soon as you paid funds. </p>

                       <li><a> How do I request a withdrawal?</a></li>
                       <p>You can request a withdrawal by clicking the "Withdraw" button in the member's area and entering the amount you want to withdraw. </p>

                       <li><a> Do I need to make a deposit to refer new members?</a></li>
                       <p>No, you do not need to make a deposit to take part in our referral program. </p>
                        
                        <li><a> How can I contact your support?</a></li>
                       <p>You can contact our support through clicking the "Contact Us" link. We offer support through Contact Form, and E-mail. </p>
                    </ul>
                </div>
            </div>
            
            <div class="right"></div>
        
        </div>
        
        <!------------ Do you have Section ---------->
        
        <div class="question">
            <div class="container">
                <h1>DO YOU HAVE ANY QUESTION?</h1>
                <p>FEEL FREE TO CONTACT US!</p>
            </div>
        </div>
        
        <!------------ Stats Section ---------->
        <?php $statds = selectStaz('transactions', ['type' => 'deposit', 'status' => 'Confirmed']) ?>
        <div class="stats">
            <h1>Stats <span>Table</span></h1>
            
            <div class="container">
                <div class="box">
                    <table>
                        <h4>Last Deposited</h4>
                        <thead>
                            <th>Username</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                        <?php foreach ($statds as $key => $statd): ?>
                        <?php $duser = selectOne('users', ['id' => $statd['user_idd']]) ?>
                            <tr>
                                <td><?php echo $duser['username'] ?></td>
                                <td><?php echo $statd['currency'] ?></td>
                                <td>$<?php echo $statd['amount'] ?></td>
                                <td><?php echo $statd['created_at'] ?></td>
                                <td><?php// $ndate = strtotime($statd['created_at']) + 259200; $timeRemaining = $ndate - time() ; $tremaining = $timeRemaining/3600; echo round($tremaining); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php $statcs = selectStaz('transactions', ['type' => 'cashout', 'status' => 'paid']) ?>
                <div class="box">
                    <table>
                        <h4>Last Withdrawals</h4>
                        <thead>
                            <th>Username</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                            <th>date</th>
                        </thead>
			<tbody>
                        <?php foreach ($statcs as $key => $statc): ?>
                            <?php $cuser = selectOne('users', ['id' => $statc['user_idd']]) ?>
                            <tr>
                                <td><?php echo $cuser['username'] ?></td>
                                <td><?php echo $statc['currency'] ?></td>
                                <td>$<?php echo $statc['amount'] ?></td>
                                <td><?php echo $statc['created_at'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    
    </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="js/slider.js"></script>
    <script src="js/calculator.js"></script>
</body>
</html>