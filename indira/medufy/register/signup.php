<?php

include('../path.php');
require_once 'server.php'; 

//This would pick up your referrer id

if(isset($_GET['ref'])){
    $ref = $_GET['ref'];
}

else{
    $ref = 'Medufied';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
    
    <div class="reg-box">
        <h1>Sign up</h1>
        <form action="signup.php" method="POST">

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-red">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <div class="text-box">
               <i class="fa fa-user"></i> 
               <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            </div>
            
            <div class="text-box">
               <i class="fa fa-envelope"></i> 
               <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            
            <div class="text-box">
               <i class="fa fa-lock"></i> 
               <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
            </div>
            
            <div class="text-box">
               <i class="fa fa-lock"></i> 
               <input type="password" name="password_2" placeholder="Confirm Password" value="<?php echo $password_2; ?>">
            </div>
            
            <input type="submit" class="btn" name="sign_up" value="submit">
            
            <p>Already a member? <a href="<?php echo BASE_URL.'/register/signin.php' ?>">Sign in</a></p>
      </form>
    </div>
    
</body>
</html>