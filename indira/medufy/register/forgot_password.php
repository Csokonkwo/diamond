<?php require_once 'server.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
<div class="reg-box">
    <form action="forgot_password.php" method="POST" class="form-container">
        <h1 class="center">Recover Password</h1>

        <?Php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
            <?php endforeach ?>
        </div>
        <?php endif ?>

        <div class="text-box">
            <input type="email" name="email" placeholder="Enter Account Email">
        </div>

        <div>
            <button type="submit" name="forgot_password" class="btn"> Recover Password</button>
        </div>

    </form>
</div>
    
</body>
</html>