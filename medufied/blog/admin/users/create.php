<?php include('../../../path.php'); ?>
<?php include(ROOT_PATH . "/blog/control/server/users.php"); 
include('../validateAdmin.php');
include('../validateAdminMain.php');
?>
<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/content.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/form.css">
</head>
    
<body>
    <!----- admin header ----->
    <?php include(ROOT_PATH. '/blog/control/includes/adminHeader.php'); ?>
   
    <div class="admin-wrapper">
        <!----- side bar included ---->
        <?php include(ROOT_PATH. '/blog/control/includes/adminSidebar.php'); ?>
        
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add user</a>
                <a href="index.php" class="btn btn-big">Manage users</a>
            </div>
            
            <div class="content">
                <br>
                <h2 class="page-title">Add user</h2>
                <form action="create.php" method="post">
                   
                    <?php include(ROOT_PATH . '/blog/control/server/errors.php'); ?>
                    
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value= "<?php echo $username; ?>" class="text-input">
                    </div>
                    
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
                    
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
                    
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="password_2" value="<?php echo $password_2; ?>" class="text-input">
                    </div>   
                                     
                    <div>
                        <?php if(isset($admin) && $admin == 1): ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            admin
                        </label>
                        <?php else: ?>
                        <label>
                            <input type="checkbox" name="admin">
                            admin
                        </label>
                        <?php endif; ?>
                    </div>
                    
                    <div>
                        <button type="submit" name="create_admin" class="btn btn-big">Add User</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    
    <script src="../../js/jquery-3.5.1.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="../../js/script.js"></script>
</body>
</html>