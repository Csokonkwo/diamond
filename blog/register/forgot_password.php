<?php
include("../path.php");
include("../admin/server/topics.php");
require_once ('server.php'); 

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
                <form action="forgot_password.php" method="POST">
                    <h2 class="center">Recover Password</h2>

                    <p>Please enter the email address associated with the account you want to recover</p>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div>
                        <button type="submit" name="forgot_password"> Recover Password</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="image"></div>
    </div>

    <?php include(ROOT_PATH . "/footer.php"); ?>
    
</body>
</html>