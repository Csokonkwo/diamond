<?php

include("path.php");
include("includes/dbFunctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?>  - Packages</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
     <div id="hero" class="hero-other">
        <h1>Our Packages</h1>
         
    </div>

     <!------------- Package section ---------------->
    
     <div class="package">
           
           <h1>
                4.5 - 7.5% ROI daily on our investment packages.
           </h1>
            
            <div class="package-container">
                <div class="package-box">
                    <h2>Silver package </h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>4.5% Daily</p>
                    <p>$200 - $4,999</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>31.5% Earned after 7days</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                </div>
                <div class="package-box">
                    <h2>Gold package</h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>5.8% Daily</p>
                    <p>$5,000 - $9,999</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>40.6% Earned after 7days</p>
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star-o"></i>
                    </p>
                </div>
                <div class="package-box">
                    <h2>Platinum package</h2>
                    <i class='fas fa-wallet wallet'></i>
                    
                    <p>7.5% Daily</p>
                    <p>$10,000 plus</p>
                    <p>7days contract</p>
                    <p>Ref Commission: 10%</p>
                    <p>Capital Return: Yes</p>
                    <p>Instant Withdrawal: Yes</p>
                    <p>52.5% Earned after 7days</p>
                    
                    <p>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </p>
                </div>
                
            </div>
        </div>

        <section class="calculator">
            <div class="field">
                <label>Select package</label>
                <select name="package" placeholder="Select package" oninput="calculate('package')">
                    <option>silver</option>
                    <option>gold</option>
                    <option>platinum</option>

                </select>
            </div>

            <div class="field">
                <label>Enter Amount</label>
                <input type="text" class="amount" name="amount" placeholder="Enter Amount" onchange="calculate('amount')" />
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
    
        
       
        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>