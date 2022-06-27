<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/blog/control/server/server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginr</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
     
<body>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
    <div class="under-header"></div>
    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>
            <?php include(ROOT_PATH . '/blog/control/server/errors.php'); ?>
            
            <div>
                <label>Username</label>
                <input type="text" name="username" value= "<?php echo $username; ?>" class="text-input">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password" name="password" value= "<?php echo $password; ?>" class="text-input">
            </div>
                  
            <div>
                <button type="submit" class="btn btn-big" name="login_btn">Login</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
        
        </form>
    
    
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>