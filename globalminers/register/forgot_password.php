<?php 

$companyName = 'Globalminers';
include("../path.php");
require_once 'server.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>

<?php  include("../includes/header.php"); ?>
    
<div class="form-section">
    <form action="forgot_password.php" method="POST" class="form-container">
        <h3 class="center">Recover Password</h3>

        <p>Please enter the email address associated with the account you want to recover</p>

        <?Php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
            <?php endforeach ?>
        </div>
        <?php endif ?>

        <div>
            <input type="email" name="email" class="text-input">
        </div>

        <div>
            <button type="submit" name="forgot_password" class="btn"> Recover Password</button>
        </div>

    </form>
</div>
<?php  include("../includes/footer.php"); ?>
</body>
</html>