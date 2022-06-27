<?php 
require_once 'server/users.php';

if(!isset($_SESSION['id'])){
    header('location: signin.php');
    exit();
}

if($_SESSION['verified'] == 0){
    $_SESSION['message'] = "Please verify your Email";
    $_SESSION['alert-class'] = "alert-danger";

    header("location: index.php");

    exit();
}

$walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
<?php include('zheader.php') ?>

        <div class="main">
            <div class="profile">
                <div class="prof">
                <?php 

                $userProfile = selectOne('users', ['id'=> $_SESSION['id']]); 

                if($userProfile['gender'] == 'female'): 
                
                ?>
                    <img src="img/female.png">
                <?php else: ?>
                    <img src="img/male.png">
                    <?php endif ?>
                    <div>
                        <p> <?php echo $_SESSION['username'];?></p>
                        <p><?php echo $_SESSION['email'];?></p>
                    </div>
                </div>
                
                <h3>Basic information</h3>
                
                <div class="basic-info">

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                            <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            unset($_SESSION['alert-class']);
                            ?>
                        </div>
                    <?php endif ?>

                    <label>Full name</label>
                    <p><?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?></p> 

                    <label>Current Balance</label>
                    <div class="balance">$<?php echo $walletBalance; ?>.00</div> 
                        
                    
                    <label>Mobile number</label>
                    <p>  <?php echo $userProfile['phone'];?></p>
                    
                    <label>Gender</label>
                    <p> <?php echo $userProfile['gender'];?></p>
                    
                    <label>Referrer ID</label>
                    <input type="text" class="basic-input" value="https://greentech.csotech.com.ng/register/signup.php?ref=<?php echo $_SESSION['id'];?> ">
                   

                    <a href="processing/update_profile.php" class="btn"> Update profile </a>
                </div>
                
                <h3>Security information</h3>
                
                <div class="basic-info">
                    
                    <label> Date Created</label>
                    <p> <?php echo $userProfile['created_at'];?></p>
                    
                    <label> Password</label>
                    <p> ********</p>

                    <a href="update_password.php" class="btn"> Change password </a>
                    
                </div>
            </div>
        </div>
        
        
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
   
</body>
</html>