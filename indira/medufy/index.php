<?php

include('path.php');
include('server/dbFunctions.php');

//THIS CODINGS LOGS THE USER OUT

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    unset($_SESSION['referrer_id']);
    header('location: index.php');

    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDUFIED</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/footer.css">
    
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>
    
<body>
    
    <?php include('header.php') ?>
    
    <main>
        
        <!------------- hero section ---------------->
        
        <div class="hero"> </div>
        
        <div class="hero-con">
            
            <span>BASIC MEDICAL EDUCATION MADE EASIER</span>
            
            <span>
                Studying makes it more likely that you will come up with ideas and make discoveries that will better human kind.
            </span>
            
            <form>
                <input type="search" placeholder="What do you want?">
            </form>
            
        </div>
        
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
                        <div class="pages-content"><a href="#">Mbbs</a></div>
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
        
            <?php include('footer.php') ?>
    
</body>
</html>