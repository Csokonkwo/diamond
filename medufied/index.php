<?php 
include("path.php"); 
include(ROOT_PATH . "/blog/control/server/topics.php");
?>
<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        <title>Medufied</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/hero.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/pages.css">
        
    </head>
    
    <body>
        
    <?php include('includes/header.php'); ?>
    <!----------------- Hero section -------------->
        <main onclick="mainBtn()">
            <section class="hero">
                <div class="hero-container">
                    <div class="hero-head">
                    Basic medical education made easier
                    </div>
                
                    <div class="hero-content">
                        Studying makes it more likely that you will come up with ideas and make discoveries that will better human kind.
                    </div>
                    
                    <div class="hero-link" id="hero-link"><a href="about.html">More</a>
                    </div>
            
                </div>
            
            </section>
            
        <!----------- Pages Section ----------------->
            
            <section class="pages" id="pages">
                <div class="pages-head">Top pages</div>
                <div class="pages-container">
                    <div class="pages-box">
                        <img src="img/pages/phy.jpg">
                        <div class="pages-content"><a href="pages/physiology/index.html">Physiology</a></div>
                    </div>
                    <div class="pages-box-2">
                        <img src="img/pages/pro.jpg">
                        <div class="pages-content"><a href="#">General</a></div>
                    </div>
                    <div class="pages-box-3">
                        <img src="img/pages/ana.jpg">
                        <div class="pages-content"><a href="#">Anatomy</a></div>
                    </div>
                    <div class="pages-box-4">
                        <img src="img/pages/1.jpg">
                        <div class="pages-content"><a href="#">Mbbs Section</a></div>
                    </div>
                    <div class="pages-box-5">
                        <img src="img/pages/bic.jpg">
                        <div class="pages-content"><a href="#">Biochemistry</a></div>
                    </div>
                    <div class="pages-box-6">
                        <img src="img/pages/1.jpg">
                        <div class="pages-content"><a href="#">Medical Articles</a></div>
                    </div>
                
                </div>
                
            </section>


            <!----------------- Footer  ------------->
            <?php include('includes/footer.php'); ?>
        </main>

    

    <script src="js/main.js"></script>    
   <script src="js/detect.js"></script>
    </body>
    
</html>