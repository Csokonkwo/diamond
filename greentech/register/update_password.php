<?php require_once 'server/users.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    
    
            <div class="form-section">
                <form action="update_password.php" method="POST" class="form-container">
                    <h3 class="center">Update Password</h3>

                    <?Php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </div>
                    <?php endif ?>

                    <div>
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password_2" class="text-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update_password" class="btn"> Update Password</button>
                    </div>

                    
                </form>

                
            </div>
        </div>
    </div>
    
</body>
</html>