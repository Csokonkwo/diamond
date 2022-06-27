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

//published and unpublished
if(isset($_GET['published']) && isset($_GET['pu_id'])){
    $published = $_GET['published'];
    $pu_id = $_GET['pu_id'];
    //..... update published
    $count = update('posts', $pu_id, ['published' => $published]);
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
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
            <div class="form-inner">
            <h2 class="page-title">Manage posts</h2>
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
                    <button type="submit" name="add_post" class="btn btn-big">Add post</button>
                </div>
            </form>
            
        </div>
        
    </main>
    
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    
</body>
</html>