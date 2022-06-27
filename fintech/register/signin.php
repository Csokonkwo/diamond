<?php 

require_once 'server.php'; 

if(isset($_GET['token'])){
    $token = $_GET['token'];
    verifyUser($token);
}

if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    updatePassword($passwordToken);
}

if(isset($_SESSION['id'])){
    header('location: ../app/index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="form.css">
</head>

<body>
   
    <div class="form-section">
        <form action="signin.php" method="POST" class="form-container">
            <h2 class="center">Login</h2>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <div>
                <label for="username">Username or Email</label>
                <input type="text" name="user" class="text-input" value="<?Php echo $user; ?>">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <button type="submit" name="sign_in" class="btn"> Login</button>
            </div>

            <p class="">Not yet a member? <a href="signup.php">Sign up</a></p>
            
            <div style="font-size: 0.8em; text-align:center;"><a href="forgot_password.php"> forgot password?</a></div>

        </form>
    </div>
       
</body>
</html>