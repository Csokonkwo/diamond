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
        <h1>FAQ's</h1>
    </div>
    
    <!-------------- Faqs Section --------->

    <div  id="faqs" class="faqs">
        <div class="container">
            <h1> Frequently Asked Questions</h1>
            <h2>POPULAR QUESTIONS</h2>

            <div>
                <ul>
                    <li><a> How can I invest with <?php echo $companyName;?> ?</a></li>
                    <p>To make a investment you must first become a member of <?php echo $companyName;?> . Once you are signed up, you can make your first deposit. All deposits must be made through the Members Area. You can login using the member username and password you receive when signup.
                    </p>

                    <li><a> I wish to invest with <?php echo $companyName;?> but I don't have an any ecurrency account. What should I do? </a></li>
                    <p>You can open a free PM account here: www.bitcoin.com  </p>

                    <li><a> How do I open my <?php echo $companyName;?> Account?</a></li>
                    <p>It's quite easy and convenient. Follow this link, fill in the registration form and then press "Register". </p>

                    <li><a> How can I withdraw funds? </a></li>
                    <p>Login to your account using your username and password and check the Withdraw section. </p>
                    
                    <li><a> How long does it take for my deposit to be added to my account? </a></li>
                    <p>Your account will be updated as fast, as you deposit. </p>

                    <li><a> What if I can't log into my account because I forgot my password?  </a></li>
                    <p>Click forgot password link, type your e-mail and you'll receive your account information.  </p>

                    <li><a> Can I do a direct deposit from my account balance? </a></li>
                    <p>Yes! To make a deposit from your <?php echo $companyName;?> account balance. Simply login into your members account and click on Make Deposit ans select the Deposit from Account Balance. </p>

                    <li><a> How can I change my password?  </a></li>
                    <p>You can change your password directly from your members area by editing it in your personal profile. </p>

                    <li><a> How can I check my account balances?  </a></li>
                    <p>You can access the account information 24 hours, seven days a week over the Internet.  </p>

                    <li><a> May I open several accounts in your program? </a></li>
                    <p>No. If we find that one member has more than one account, the entire funds will be frozen. </p>

                    <li><a> How can I make a deposit? </a></li>
                    <p>To make a spend you must first become a member of <?php echo $companyName;?> . Once you are signed up, you can make your first spend. All spends must be made through the Member Area. You can login using the member username and password you received when signup.  </p>

                    <li><a> Who Manages The Funds</a></li>
                    <p>These funds are managed by a team of <?php echo $companyName;?> investment experts. </p>
                </ul>
            </div>
        </div>
    </div>

    
    
    </main>
    
    <?php include("includes/footer.php"); ?>
</body>
</html>