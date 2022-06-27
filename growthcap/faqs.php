<?php

include("path.php");
include("includes/dbFunctions.php");
$pageName = "FAQ's";

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
    
     <!-------------- Faqs Section --------->

    <div  id="faqs" class="faqs">
        <div class="container">
            <h1> Frequently Asked Questions</h1>

            <div>
                <ul>
                    <li><a> How can I invest with <?php echo $companyName;?> ?</a></li>
                    <p>To make an investment, you have to register to become a member of <?php echo $companyName;?>. Once you are signed up, you can make a deposit, and choose any investment package of your choice.
                    </p>

                    <li><a> I wish to invest with <?php echo $companyName;?> but I don't have an e-currency account. What should I do? </a></li>
                    <p>You can open an e-currency account here: www.blockchain.com  </p>

                    <li><a> How do I open my <?php echo $companyName;?> Account?</a></li>
                    <p>It's quite easy and convenient. click on Register, fill in the registration form and then press "Submit". </p>

                    <li><a> How can I withdraw funds? </a></li>
                    <p>Login to your account using your username and password and check the Withdrawal section. </p>
                    
                    <li><a> How long does it take for my deposit to be added to my account? </a></li>
                    <p>Your account will be updated as fast, as you deposit. </p>

                    <li><a> What if I can't log into my account because I forgot my password?  </a></li>
                    <p>Click forgot password link, type your e-mail and you'll receive your account information.  </p>


                    <li><a> How can I change my password?  </a></li>
                    <p>You can change your password directly from your members area by editing it in your personal profile. </p>

                    <li><a> How can I check my account balances?  </a></li>
                    <p>You can access the account information 24/7 on you dashboard.  </p>

                    <li><a> May I open several accounts in your program? </a></li>
                    <p>No. If we find that one member has more than one account, the entire funds will be frozen. </p>

                    <li><a> How can I make a deposit? </a></li>
                    <p> Once you are signed up, you can make a deposit by clicking on "Deposit" in your <?php echo $companyName;?> Account  </p>

                    <li><a> Who Manages The Funds</a></li>
                    <p>These funds are managed by a team of <?php echo $companyName;?> investment experts. </p>
                </ul>
            </div>
        </div>
    </div>

        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>