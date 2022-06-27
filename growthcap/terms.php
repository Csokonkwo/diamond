<?php

include("path.php");
include("includes/dbFunctions.php");
$pageName = 'Terms';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.php"); ?>
    <link rel="stylesheet" href="css/other.css">
    
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>
        
    <!-------------- Terms Section --------->
    <div class="terms">
        <div class="container">
            <h2>Our Rules</h2>

            <p>
                Please read the following rules carefully before signing in. <br> <br>

                You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years. <br> <br>

                <?php echo $companyName;?> is not available to the general public and is opened only to the qualified members of <?php echo $companyName;?>, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the <?php echo $companyName;?> and its Member. <br> <br>

                As a private transaction, this program is exempt from the US Securities Act of 1933, the US Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security firm. <br> <br>

                You agree that all information, communications, materials coming from <?php echo $companyName;?> are unsolicited and must be kept private, confidential and protected from any disclosure. Moreover, the information, communications and materials contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer or solicitation. <br> <br>



                All the data giving by a member to <?php echo $companyName;?> will be only privately used and not disclosed to any third parties. <?php echo $companyName;?> is not responsible or liable for any loss of data. <br> <br>

                You agree to hold all principals and members harmless of any liability. You are investing at your own risk and you agree that a past performance is not an explicit guarantee for the same future performance. You agree that all information, communications and materials you will find on this site are intended to be regarded as an informational and educational matter and not an investment advice. <br> <br>
 
                We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity and security of the members' interests. You agree that it is your sole responsibility to review the current terms. <br> <br>

                <?php echo $companyName;?> is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to <?php echo $companyName;?> that you will not use this site in any illegal way and you agree to respect your local, national and international laws. <br> <br>

                Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator. <br> <br>

                We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program. <br> <br>

                <?php echo $companyName;?> reserves the right to accept or decline any member for membership without explanation. <br> <br>

                If you do not agree with the above disclaimer, please do not go any further. <br> <br>

            </p>
        </div>
    </div>
       
        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>