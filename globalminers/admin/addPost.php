<?php
$pageName = 'Admin Dashboard';
include('../path.php');
include('server.php');

//delete post
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete('posts', $id);
    header('location: index.php');
    exit();
}


$posts = selectAll('posts')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
            <div class="form-container">
            <a href="index.php" style="display: inline-block" class="btn">Manage posts</a>
            
            <form action="addPost.php" method="post" enctype="multipart/form-data">

                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <br>
                    <input type="text" name="username" value= "<?php echo $username; ?>" class="text-input" placeholder="Username">
                
                    <input type="text" name="amount" class="text-input" value= "<?php echo $amount; ?>" placeholder="Amount">

                    <input type="text" name="currency" class="text-input" value= "<?php echo $currency; ?>" placeholder="Currency">
                    
                    <input type="text" name="type" class="text-input" value= "<?php echo $type; ?>" placeholder="type">
                
                    <button type="submit" name="add_post" class="btn btn-big">Add post</button>
                
            </form>
            
        </div>
        
    </main>
    
    <?php include("footer.php")?>
    
</body>
</html>