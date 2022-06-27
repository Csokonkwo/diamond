<?php 
include("../path.php");
include("server.php");

if(isset($_GET['published']) && isset($_GET['c_id'])){
    $published = $_GET['published'];
    $c_id = $_GET['c_id'];
    //..... update published
    $count = update('comments', $c_id, ['published' => $published]);
    $_SESSION['message'] = 'Comment published state changed';
    $_SESSION['type'] = 'success';
    header('location: comments.php');
    exit();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<?php include("header.php"); ?>
    
    <!----------- Main section ---------------->
    
    <main>
    <div class="admin-content">
            <?php $comments = selectAll('comments') ?>
            
            <div class="content">
                <br>
                <h2 class="page-title">Manage comments</h2>
                <?php include('message.php'); ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th colspan="1">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($comments as $key => $comment): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $comment['username'] ?></td>
                            <td><?php echo $comment['comment'] ?></td>
                            <td><?php echo $comment['created_at'] ?></td>
                            <?php if($comment['published']): ?>
                            <td><a href="comments.php?published=0&c_id=<?php echo $comment['id'] ?>" class="unpublish">unpublish</a></td>
                            <?php else: ?>
                            <td><a href="comments.php?published=1&c_id=<?php echo $comment['id'] ?>" class="publish">publish</a></td>
                            <?php endif; ?>
                            
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>

    <?php include("footer.php"); ?>