<?php 

$pageName = 'New Password';
include("../path.php");
require_once 'server.php';

if(!isset($_GET['new_pass'])){
    header('location: signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/other.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
   
<?php  include("../includes/header.php"); ?>

<!-------------- Hero Section --------->
    
<div id="hero" class="hero-other">
        <h1>User Account</h1>
         
    </div>
            <div class="form">
                <div class="container">
                <form action="new_password.php" method="POST" class="form-container">
                    <h3 class="center">Update Password</h3>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div>
                        <input type="password" name="password" placeholder="New Password" class="text-input">
                    </div>

                    <div class="form-group">
                        <input type="password" placeholder="Confirm New Password" name="password_2" class="text-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="new_password" class="btn"> Update Password</button>
                    </div>

                    
                </form>

                
            </div>
        </div>
    

    <?php  include("../includes/footer.php"); ?>
</body>
</html>