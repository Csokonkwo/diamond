<?php 
include('../../../path.php');
include(ROOT_PATH . "/server/posts.php"); 
include(ROOT_PATH . "/blog/admin/author.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
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
                <a href="create.php" class="btn btn-big">Add post</a>
                <a href="index.php" class="btn btn-big">Manage posts</a>
            </div>
            
            <div class="content">
                <br>
                <h2 class="page-title">Edit post</h2>
                <?php include(ROOT_PATH . "/server/errors.php") ?>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value= "<?php echo $title; ?>" class="text-input">
                        
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body; ?></textarea>
                        </div>
                        
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        
                        <div>
                            <label>Topic</label>
                            <select name="topic_id" class="text-input">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name']; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name']; ?></option>

                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="">
                            <?php if(empty($published) && $published == 0): ?>
                            <label>
                                <input type="checkbox" name="published"> Publish
                            </label>
                            <?php else: ?>
                            <label>
                                <input type="checkbox" checked name="published"> Publish
                            </label>
                            <?php endif; ?>
                        </div>
                        
                    <div>
                        <button type="submit" name="update_post" class="btn btn-big">Update post</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="../script.js"></script>
</body>
</html>