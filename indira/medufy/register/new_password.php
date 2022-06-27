<?php require_once 'server.php'; 

if(!isset($_GET['new_pass'])){
   header('location: signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    
    <link rel="stylesheet" href="form.css">

</head>
<body>
    
    
            <div class="reg-box">
                <form action="new_password.php" method="POST" class="form-container">
                    <h3 class="center">Update Password</h3>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div class="text-box">
                        
                        <input type="password" name="password" placeholder="Enter Password" class="text-input">
                    </div>

                    <div class="text-box">
                        
                        <input type="password" name="password_2" placeholder="Confirm Password" class="text-input">
                    </div>

                    <div class="text-box">
                        <button type="submit" name="new_password" class="btn"> Update Password</button>
                    </div>
                    
                </form>

                
            </div>
        </div>
    </div>
    
</body>
</html>