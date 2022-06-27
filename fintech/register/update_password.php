<?php 

require_once 'server.php'; 

if(!isset($_SESSION['id'])){
    echo 'Not recognized';
    die();
    header('location: signin.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    
    <link rel="stylesheet" href="form.css">

</head>
<body>
    
    <div class="form-section">
        <form action="update_password.php" method="POST" class="form-container">
        
            <h3 class="center">Update Password</h3>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <div>
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" class="text-input">
            </div>

            <div>
                <label for="password">New Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <label for="password_2">Confirm New Password</label>
                <input type="password" name="password_2" class="text-input">
            </div>

            <div>
                <button type="submit" name="update_password" class="btn"> Update Password</button>
            </div>

            <p class="">Profile? <a href="../app/profile.php"> go to profile</a></p>

        </form>
           
    </div>
    
</body>
</html>