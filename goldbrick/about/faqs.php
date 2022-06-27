<?php

include("../path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = "FAQ's";

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include(ROOT_PATH . "/includes/head.php"); ?>
    <link rel="stylesheet" href="../css/other.css">

</head>
<body>
    
<?php include(ROOT_PATH . "/includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>
    
     <!-------------- Faqs Section --------->

    <div  id="faqs" class="faqs">
        <div class="container">
            <h1> Frequently Asked Questions</h1>

            <div>
                <ul>
                    <li><a> How do I open my <?php echo $companyName;?> Account?</a></li>
                    <p>Click on Register, fill in the registration form and then submit, check your email for account verification link. </p>

                    <li><a> How can I invest with <?php echo $companyName;?> ?</a></li>
                    <p>To make an investment, you have to register to become a member of <?php echo $companyName;?>. When you are signed up, you can make a deposit, and choose any investment package of your choice.
                    </p>

                    <li><a>How do i make a deposit? </a></li>
                    <p>You can buy bitcoins or Usdt and send directly to the company's wallet address or you can chat our online support here on our website for other payment methods. </p>
                    
                    <li><a> How long does it take for my deposit to be added to my account? </a></li>
                    <p>Your deposit will be confirmed and amount added to your balance immediately the company confirms your deposit.</p>
                    
                    <li><a> How can I withdraw funds? </a></li>
                    <p>Login to your account using your username and password, go to the withdrawal section, fill the form and submit. Payments are made not later than 48 Hours. </p>

                    <li><a> What if I can't log into my account because I forgot my password?  </a></li>
                    <p>Click forgot password link, type your e-mail and a link will be send to your email. Click on the link to enter your new password.  </p>

                    <li><a> How can I change my password when i feel like?  </a></li>
                    <p>You can change your password directly from your members area by editing it in your personal profile. </p>

                    <li><a> How can I check my account balance?  </a></li>
                    <p>You can access the account information 24/7 on you dashboard.  </p>

                    <li><a> What is the referral program?  </a></li>
                    <p>The company will pay you 10% when a new member joins the community with your referral link and makes an investment. Your referral link can be found on your profile and Referral page. </p>

                    <li><a> When do i receive my ROI </a></li>
                    <p> ROIs are sent daily(Anytime of the day) to your account and an alert sent your mail to notify you of the new ROI added to your account. </p>

                    <li><a> Does the ROI change? </a></li>
                    <p> ROI does not change except at times when the company give her members offers. These offers are made via our live chat support or Email only. </p>

                    <li><a> Who Manages The Funds</a></li>
                    <p>These funds are managed by a team of <?php echo $companyName;?> investment analysts and experts. </p>
                </ul>
            </div>
        </div>
    </div>

        
    </main>
    
    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
    
</body>
</html>