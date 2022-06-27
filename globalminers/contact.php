<?php
$companyName = 'Globalminers';

include("path.php");

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
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    
   <?php  include("includes/header.php"); ?>
   <main>
     <!-------------- Hero Section --------->
    
     <div id="hero" class="hero-other">
        <h1>Contact</h1>
    </div>
    
    <!-------------- Contact Section --------->

    <div class="contact">
        <div class="container">
            <div class="left">
                <h1>Get in Touch</h1>
                <p id="message-response" style="text-align:center; font-weight:bold;"> </p>
                <form onsubmit="return sendMessage()" id="message-form">
                    <input type="text" class="text-input" placeholder="Enter fullname" id="message-fullname">
                    <input type="email" name="" class="text-input" placeholder="Enter email" id="message-email">
                    <textarea name="message" placeholder="Your message..." cols="30" rows="10" id="message-message"></textarea>
                    <button type="submit">Send Message</button>
                </form>

                
            </div>

            <div class="right">
                <h1>Contact Info</h1>
                <p><i class="fa fa-map-marker"></i> Amesbury Road CF21 4DW Cardiff city. </p>
                <p><i class="fa fa-envelope"></i> admin@<?php echo $companyName;?>.com </p>
                <p>
                    <a href="" id="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="" id="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="" id="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="" id="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="" id="whatsapp"><i class="fa fa-whatsapp"></i></a>
                </p>
            </div>
        </div>
    </div>
    
    
    </main>
    
    <?php include("includes/footer.php"); ?>
</body>
</html>