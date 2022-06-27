<?php 

$companyName = 'Globalminers';
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
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    
    <?php  include("../includes/header.php"); ?>
            <div class="form-section">
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
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password_2" class="text-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="new_password" class="btn"> Update Password</button>
                    </div>

                    
                </form>

                
            </div>
        </div>
    </div>
    <?php  include("../includes/footer.php"); ?>
</body>
</html>