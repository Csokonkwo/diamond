<?php include('path.php') ?>
<?php $companyName = 'Greentech'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $companyName; ?> </title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    
<body>

    <?php include('header.php') ?>
    
    <!------------ Hero section starts here ------------>
    
    <main>
        

        <!-------------- About ----------------->

        <div class="about">

            <div class="about-container about-about">
                <div class="about-head">About  <?php echo $companyName; ?></div>
                <div class="about-content">
                <?php echo $companyName; ?> is a Telecommunications company that provides telecommunications services, financial investments and advisory, for the redistribution of monetary values generated therein via several wealth creation means ranging from, wide expanse of commerce, extensive trading in forex, Crypto mining amongst others. 
                    
                <br><br>
                At  <?php echo $companyName; ?>, we partner with several public corporations to effect narrowing of the wide financial constraints militating against the purchasing powers of the populace. 
                    <br><br>
                    Here at  <?php echo $companyName; ?>, our services has far reaching benefits on several top global firms. We are particular in provision of highly beneficial revenue to our clients and investors through our services.We strongly believe that with the concerted effort of our investors and the extensive commercial prowess of our firm and partners, our goal of client satisfaction and maintenance of integrity would be held in invincible sustenance.
                     </div>

                
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

        <br>
        <br>
        SOME RECENT POSTS FROM OUR BLOG GOES HERE...
        <br>
        <br>
        
        
        <!---- check footer --->
        <?php include('footer.php') ?>
</body>
</html>