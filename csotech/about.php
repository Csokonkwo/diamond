<?php
session_start();
$companyName = 'Csotech';

?>
<!DOCTYPE html>
<html lang="en">
<head>  

    <title>CSOTECH - About</title>
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
    <link rel="stylesheet" href="css/oabout.css">
    <link rel="stylesheet" href="css/footer.css">
 
</head>
    
<body>
    
    <!--------------- Header starts here ------------>

    <?php include("includes/header.php"); ?>
    
    <main>

    <!---------- Hero section starts here ---------->  
    
    <div id="hero" class="hero-other">
        <h1>About us</h1>
         
    </div>
    
    <!-------------- About Section --------->
    <div id="about">
        <div class="about-other">
            <div class="container">
                <div class="left">
                    <h2><span></span></h2>
                    <p> Csotech is a Tech consulting company that is focused on providing professional services in four major fields: Software development, Data management, Digital services and IT consulting. <br> <br>

                        Csotech services consist of designing, development and implementation of solutions to problems, as well as systems application and IT advancement. <br> <br>
                        With a great experience in the technology industry, we understand the needs of our clients and we are committed to giving them the best in all our major field of service. <br> <br>

                        Your website is the fundamental support of your online presence, We have a team of developers who are specialized in providing digital services like websites and Mobile app development and they are committed to giving you the best place to house your content, ideas or business online. <br> <br>

                        If you are looking to experience unique services and a result-based approach, Csotech is definitely the Tech consulting company you are looking</p>

                    <img src="img/mission.jpg" height="300px">
                </div>
                <div class="right">
                    <h2 id="vision">Our Vision</h2>
                    <p>To Be the number one self-sustaining technology consulting firm that provides technological related solutions to everyone.<br> <br>

                        To equip teams that need a secure and reliable way to collaborate on mission-critical projects. Our sites are protected by privacy 
                        controls and data encryption, and meet industry-verified compliance standards. <br> <br>

                        To create equal and advanced opportunities for both large companies and small investors.<br> <br>

                        To develop Innovations that increases your chances to react to changes and discover new opportunities, these helps foster competitive advantage as it allows you to build better products and services for our clients.<br> <br></p>

                    
                </div>
            </div>
        </div>

        <div class="mission" id="mission">
            <div class="container">
                <img src="img/mission1.jpg">
                <div class="right">
                    <h2>Our Mission</h2>
                    <p>To provide unrivalled, premium and unique solutions aimed towards meeting the business objectives of clients through the use of appropriate and cost effective technologies. </p>
                </div>
            </div>

        </div>

         <div class="mission-other">
            <div class="container">

                <div class="left">
                    <h2>We Are On a Mission</h2>
                    <p> With out social features, employees at every level have a voice to contribute, share, and receive feedback.
                    An open, connected structure allows information to flow freely among everyone at our organization.. <br> <br></p>
                </div>

                <img src="img/drone.jpg">
            </div>

        </div>

        <!----<div class="cert">
            <img src="img/cert.png">
        </div> --->
    </div>

        <!------------------- footer --------------->

        <?php include("includes/footer.php"); ?>
     
</body>
</html>