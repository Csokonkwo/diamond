<?php 
include('../../../path.php');
include(ROOT_PATH . "/blog/control/server/posts.php");
include('../validateAdmin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medufied</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="../../css/style.css">
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
                <a href="create.php" class="btn btn-big">Add post</a>
                <a href="index.php" class="btn btn-big">Manage post</a>
            </div>
            
            <div class="content">
                <br>
                <h2 class="page-title">Manage post</h2>
                <?php include(ROOT_PATH . '/blog/control/includes/message.php'); ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $post['title'] ?></td>
                            <td>username</td>
                            <td><a href="edit.php?id= <?php echo $post['id']; ?>" class="edit">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                            <?php if($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                            <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    
    
    <script src="../../js/jquery-3.5.1.js"></script>
    <script src="../../js/script.js"></script>
</body>
</html>