<?php 
require_once 'server/users.php';


if(!isset($_SESSION['id'])){
    header('location: signin.php');
    exit();
}

$userProfile = selectOne('users', ['id'=> $_SESSION['id']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>

    <?php 
    include('zheader.php');

    $walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);
    ?>

    <?php if($_SESSION['verified']): ?>

        <div class="main">
            <div class="indexx">
                
                <div class="brief-info">
            
                    <?php if(empty($userProfile['firstname'])): ?> <div> &nbsp <?php  echo 'Please Update your profile' ?> <a href="processing/update_profile.php" style="color:blue; text-decoration:underline;">here</a> </div>  <?php endif; ?> 
                    <div class="fullname"> <?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?> </div>
                    
                    <div class="balance"> (USD <?php echo $walletBalance; ?>.00)</div>
                    
                    <div class="level"> Verified User</div>
                
                </div>
            <?php endif;?>
            <div class="basic-info">
                <div class="converter">
                <h3> Check Our Current Exchange rates</h3>
                    <iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" 
                            width="100%" 
                            height="310px" 
                            scrolling="auto" 
                            marginwidth="0" 
                            marginheight="0" 
                            frameborder="0" 
                            border="0" 
                            style="border:0;
                                margin:0;
                                padding:0;
                                ">
                    </iframe>
                </div> 
            </div>
                
        </div>
    </div>


    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    
    
</body>
</html>

