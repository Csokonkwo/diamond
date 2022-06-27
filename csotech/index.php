<?php

session_start();

if(isset($_GET['logout'])){
    
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    
    header('location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSOTECH</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Csotech is a Tech consulting company that is focused on providing professional services in four major fields: Software development, Data management, Digital services and IT consulting.">
    <meta name="keywords" content="Web development, Mobile app development, IT consulting, Web Management, Websites, Mobile Apps, Digital services">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/news-letter.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    
<?php include("includes/header.php") ?>
   
    <main>
    <!---------- Hero section starts here ---------->  
    
    <div class="hero">

             <div class="slider">
                <img src="img/hero_1.jpg" alt="." />
                <img src="img/hero_2.jpg" alt="…" />
                <img src="img/hero_3.jpg" alt="…" />
                <img src="img/hero_4.jpg" alt="…" />
            </div>


            <div class="hero-cover">
                <div id="typeeffect">
                    <p></p>
                    <p>Stunning software developments and designs</p>
                    <p>Magnificent Tech consulting solutions</p>
                    <p>Elegant Digital services to verify credibility</p>

                </div>

               <div class="hero-container"> 
                   <br>

                    <p class="hero-intro-1"></p>

                    <div class="hero-intro-2" id="hero-intro">
                        <span>L</span>
                        <span>e</span>
                        <span>t</span>&nbsp;
                        <span>t</span>
                        <span>h</span>
                        <span>e</span>&nbsp;
                        <span>w</span>
                        <span>o</span>
                        <span>r</span>
                        <span>l</span>
                        <span>d</span>&nbsp;
                        <span>s</span>
                        <span>e</span>
                        <span>e</span>&nbsp;
                        <span>y</span>
                        <span>o</span>
                        <span>u</span>

                   </div>
                    <br>
                    <a href="#" class="hero-intro-more gradient btn-big" id="hero-effect"> More</a>

                </div>
            </div>
        </div>
        
         <!----------- About section starts here --------->

        <section class="about" id="about">

         <div class="aboutleft">

             <div class="about-content">

                 Csotech is a Tech consulting company that is focused on providing professional services in four major fields: Software development, Data management, Digital services and IT consulting. <br> 

                 If you are looking to experience unique services and a result-based approach, Csotech is definitely the Tech consulting company you are looking for.
                <br>
                 <span><a href="about.php">More about us!</a></span>
             </div> 
           </div>

           <div class="about-image" id="about-image">   <img src="img/about.jpg" class="about-image-content">

           </div>

        </section>

        <!---------------- Service section ---------->

        <section class="services">
            <div  class="service-cont">
                <div class="service-box"> 
                    <h3>Tech Services</h3>
                    <p>Csotech provides professional services that facilitates the use of technology by an individual or organization. <br> Our services are but not limited to Software, Website, Web and mobile app design and development, Graphic and Logo designs and all information technology services.</p>
                </div>
                <div class="service-box"> 
                    <h3>Management</h3>
                    <p>We provide management i.e Innovation and maintainance of all services we offer to stir growth and increase bottom line benefits to our clients. <br>Our technology-oreinted solutions combine the processes and functions of hardware and software to drive excellence in IT operations and data integration across all areas of operation.
                    </p>
                </div>
                <div class="service-box"> 
                    <h3>Tech Consulting</h3>
                    <p>Csotech strives to ensure excellence in high quality research so as to give the best information on how to use Technology and its practices to achieve your goal.<br> Our assessments and support initiatives help you to create auctionble strategies that will adequately promote key business priorities.</p>
                </div>
            </div>
            
        </section>
        <section class="features">
            <div class="scroller text">
                <div>
                    Seo-optimization <span>security</span> Credibility <span>Social Media Integration</span> Mobile Responsiveness<span>Professional Email Accounts</span>
                </div>
            </div>
        </section>
        
        <!------------------- carousel--------------->

        <div class="carousel">
            <h1 class="carousel-head">
                Affiliates 
                <i class=""></i>
            </h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <div class="carousel-container">
                
                <div class="carousel-box">
                    <span><a href="#"><img src="img/medufied.png" alt=""></a></span>
                </div>
                <div class="carousel-box">
                    <span><a href="https://madinma.com.ng"><img src="img/madinma.png" alt=""></a></span> 
                </div>
                <div class="carousel-box">
                    <span><a href="#"><img src="img/54fish.png" alt=""></a></span>
                </div>

                <div class="carousel-box">
                <span><a href="https://blog.csotech.com.ng"><img src="img/ourblog.png" alt=""></a></span>
                </div>
            </div>
        </div>


        <!---------------- News letter section ---------->

        <section class="news-letter">

            <form onsubmit="return sendEmail()" id="news-form">
                <label for="email">
                    Subscribe to our newsletter to get notifications about new offers
                </label>

                <input type="email" name="email" id="email" placeholder="Your Email" required>

                <button type="submit" name="news_submit">
                Submit
                </button>
                <div id="news-response"></div>
            </form> 

            <br>
        </section>


    
        </main>
    
    <?php include("includes/footer.php") ?>

</body>
</html>