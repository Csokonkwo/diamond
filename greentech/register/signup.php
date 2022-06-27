<?php require_once 'server/users.php'; 

//This would pick up your referrer id

if(isset($_GET['ref'])){
    $ref = $_GET['ref'];
}
else{
    $ref = 'greentech';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    
    <div class="form-section">
        <form action="signup.php" method="POST" class="form-container">
        
            <h3 class="center">Register</h3>

            <?Php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?>.</li>
                <?php endforeach ?>
            </div>
            <?php endif ?>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username" class="text-input" value="<?Php echo $username; ?>">
            </div>

            <input type="hidden" name="referrer_id" value="<?php echo $ref ?>">

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" class="text-input" value="<?Php echo $email; ?>">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" class="text-input">
            </div>

            <div>
                <button type="submit" name="sign_up" class="btn"> Sign Up</button>
            </div>

            <p class="">Already a member? <a href="signin.php">Sign in</a></p>


        </form>
           
    </div>
    
</body>
</html>