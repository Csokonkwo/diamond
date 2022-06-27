<?php

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = "Contact";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include(ROOT_PATH . "/includes/head.php"); ?>

  <link rel="stylesheet" href="<?php echo BASE_URL . '/css/other.css' ?>">

</head>

<body>

  <?php include(ROOT_PATH . "/includes/header.php"); ?>

    <main>
      
        <div class="contact">
            <div class="container">
                <div class="left">
                    <h1>Contact Us</h1>
                    <p id="message-response" style="text-align:center; font-weight:bold;"> </p>
                    <form onsubmit="return sendMessage()" id="message-form">
                        <input type="text" class="text-input" placeholder="Name" id="message-fullname">
                        <input type="email" name="" class="text-input" placeholder="Email" id="message-email">
                        <textarea name="message" placeholder="Your message..." cols="30" rows="10" id="message-message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>

                </div>

                <div class="right">
                    <h1>Our Contact Info</h1>
                    
                    <p><i class="fa fa-envelope"></i> support@<?php echo $companyEmail;?>.com </p>
                    <p><i class="fa fa-map-marker"></i> HQ: <?php echo $companyLocation; ?>  </p>
                </div>
            </div>
        </div>
      
    </main>
    
    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
    
</body>


</html>