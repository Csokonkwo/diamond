<?php 
include('../../../path.php'); 
include(ROOT_PATH . "/server/topics.php");
include(ROOT_PATH . "/blog/admin/admin.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add topic</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/content.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../../css/form.css">
</head>
    
<body>
   <!----- admin header ----->
   <?php include(ROOT_PATH. '/blog/admin/adminHeader.php'); ?>
    
    <div class="admin-wrapper">
        <!----- side bar included ---->
        <?php include(ROOT_PATH. '/blog/admin/adminSidebar.php'); ?>
        
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add topic</a>
                <a href="index.php" class="btn btn-big">Manage topics</a>
            </div>
          
            <div class="content">
                <br>
                <h2 class="page-title">Add topic</h2>

                <?php include(ROOT_PATH . "/server/errors.php") ?>
                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value= "<?php echo $name; ?>" class="text-input">
                        
                         <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description; ?></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="add_topic" class="btn btn-big">Add Topic</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="../script.js"></script>
</body>
</html>