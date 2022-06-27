<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>  

    <title>CSOTECH - Contact</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Csotech is a Tech consulting company that is focused on providing professional services in four major fields: Software development, Data management, Digital services and IT consulting.">
    <meta name="keywords" content="Web development, Mobile app development, IT consulting, Web Management, Websites, Mobile Apps, Digital services">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/footer.css">
 
</head>
    
<body>
    
    <!--------------- Header starts here ------------>

    <?php include("includes/header.php"); ?>


    <main>
    <!---------- Hero section starts here ---------->  
    
    <div id="hero" class="hero-other">
        <h1>Our Contact links</h1>
         
    </div>

        <!----------- About section starts here --------->

        <section class="about" id="about">

            <div class="aboutleft">

                <div class="about-content">

                    <h3>General Inquiries</h3>

                    <div class="footer-contact">
                        <span>
                            <i class="fa fa-phone-alt"> &nbsp;
                            +234 806 561 9176
                            </i>
                        </span>
                        <span><i class="fa fa-envelope">&nbsp; Support@csotech.com.ng, <br> info@csotech.com.ng</i></span>
                    </div>

                    <h3>Our Social Media Links</h3>
                    <div class="footer-about contact">
                        <div class="socials">
                            <a href="https://facebook.com/csotechofficial" id="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://wa.me/+2348065619176" id="whatsapp"><i class="fa fa-whatsapp"></i></a>
                            <a href="https://twitter.com/csotech" id="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com/csotech" id="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/csotech" id="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                   
                    <h3>Corporate Head Office </h3>
                    <p>No. 1 Chief Palace street Jiwa Abuja.</p>
                </div> 
           </div>

           <div class="about-image" id="about-image">   
                <img src="img/about.jpg" class="about-image-content">

           </div>
            
        </section>
           
           <section class="order">

            <form id="order-form" onsubmit="return sendOrder()">
                <label for="username">
                    What service do you want?
                </label>
                <input type="email" name="email" id="order-email" placeholder="Your Email" required>
                <input type="text" placeholder="Date (optional)" name="date" id="order-date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                <select name="type" id="order-type" required>
                    <option>Service type</option>
                    <option>Website</option>
                    <option>Mobile App</option>
                    <option>Video editing</option>
                    <option>Others</option>
                </select>
                <button type="submit" name="order_submit">
                Submit
                </button>
                <div id="order-response"></div>
            </form> 

            <br>

       

        </section>

        <!---------------- order section ---------->

        

        <!------------------- footer --------------->

        <?php include("includes/footer.php"); ?>
     
</body>
</html>