<?php

include('../path.php');
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
    
    <div class="reg-box">
        <h1>Sign in</h1>
        <form action="signin.php" method="POST">

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>
            <div class="text-box">
                <i class="fa fa-envelope"></i> 
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            
            <div class="text-box">
                <i class="fa fa-lock"></i> 
                <input type="password" name="password" placeholder="Password">
            </div>
            
            <input type="submit" class="btn" name="sign_in" value="submit">

            <p>Not yet a member? <a href="<?php echo BASE_URL.'/register/signup.php'?>">Sign up</a></p>
            <a href="forgot_password.php">forgot password?</a>
        </form>
    </div>
    
</body>
</html>