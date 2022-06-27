<?php 

include("../path.php");
include("../admin/server/topics.php");
require_once ('server.php'); 

if(isset($_GET['token'])){
    $token = $_GET['token'];
    verifyUser($token);
}

if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    updatePassword($passwordToken);
}

if(isset($_SESSION['id'])){
    header('location: ../index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csotech/Membership</title>

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
   
<?php include(ROOT_PATH . "/header.php"); ?>

    <div class="member">

        <div class="form">
            <div class="container">
                <form action="signin.php" method="POST">
                    <h2 class="center">Member Login</h2>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?>.</li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div>
                        <input type="text" name="user" class="text-input" placeholder="Username or Email" value="<?Php echo $user; ?>">
                    </div>

                    <div>
                        <input type="password" name="password" placeholder="Password" class="text-input">
                    </div>

                    <div>
                        <button type="submit" name="sign_in"> Login</button>
                    </div>

                    <p class="">Not yet a member? <a href="signup.php">Sign up</a></p>
                    
                    <div style="font-size: 0.8em; text-align:center;"><a href="forgot_password.php"> forgot password?</a></div>

                </form>
            </div>
        </div>

        <div class="image"></div>
    </div>   
    
    <?php include(ROOT_PATH . "/footer.php"); ?>
</body>
</html>