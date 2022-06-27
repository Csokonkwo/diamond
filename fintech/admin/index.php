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
        <div class="transaction scroll">
            <h2>Transaction History</h2>
            <a href="addPost.php" class="btn" style="display: inline-block">Add post</a>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Post_id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th colspan="3">Actions</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $post['id'] ?></td>
                            <td><?php echo $post['title'] ?></td>
                            <td><?php echo $post['user_idd'] ?></td>
                            <td><?php echo $post['created_at'] ?></td>

                            <td><a href="edit.php?id=<?php echo $post['id']; ?>">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $post['id']; ?>">delete</a></td>

                            <?php if($post['published'] == 0): ?>
                            <td><a href="index.php?published=1&pu_id=<?php echo $post['id'] ?>">publish</a></td>
                            <?php else:?>
                            <td><a href="index.php?published=0&pu_id=<?php echo $post['id'] ?>">unpublish</a></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
            
        </div>
        
    </main>
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    
</body>
</html>