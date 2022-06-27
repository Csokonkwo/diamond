<?php 
include('../../path.php');
include(ROOT_PATH . "/server/posts.php"); 
include(ROOT_PATH . "/blog/admin/author.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
    
<body>
    <!----- admin header ----->
    <?php include(ROOT_PATH. '/blog/admin/adminHeader.php'); ?>
    
    <div class="admin-wrapper">
        <!----- side bar included ---->

        <?php include(ROOT_PATH. '/blog/admin/adminSidebar.php'); ?>

            
            <div class="content">
                <br>
                <h2 class="page-title">Dashboard</h2>
                <?php include(ROOT_PATH . "/blog/admin/message.php"); ?>
                
            </div>
        </div>
        
    </div>
    
    
    
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>