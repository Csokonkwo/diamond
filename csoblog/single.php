<?php 

include("path.php");
include("includes/server.php");


if(isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
    
    }
    
    //$topics = selectAll('topics');
    $posts = selectAll('posts', ['published' => 1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSOTECH</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Csotech is a Tech consulting company that is focused on providing professional services in four major fields: Software development, Data management, Digital services and IT consulting.">
    <meta name="keywords" content="Web development, Mobile app development, IT consulting, Web Management, Websites, Mobile Apps, Digital services">
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include("header.php")?>
    <!----------- Main section ---------------->
    
    <main>
        <div class="single">
            <h1><?php echo $post['title']; ?></h1>
            <p><i><?php $username = selectOne('users', ['id'=> $post['user_id']]); echo $username['username']; ?></i> <i><?php echo date('F j, Y.', strtotime($post['created_at'])); ?></i></p>
            
            <img src="<?php echo BASE_URL . '/admin/img/img/'. $post['image']; ?>" alt="" class="post-image single-image">

            <p><?php echo html_entity_decode($post['body']); ?></p>
            </div>

            <section class="comments">
                <div class="comment-box">
                    <i class="fa fa-star" style="color:orange"></i> <i class="fa fa-star" style="color:orange"></i> <i class="fa fa-star" style="color:orange"></i> <i class="fa fa-star" style="color:orange"></i> <i class="fa fa-star" style="color:orange"></i>
                    <i id="comment-response"></i>
                    <form onsubmit="return sendComment()" id="comment-form" >
                        <input type="text" id="comment" placeholder="Leave a comment" class="text-input" name="comment" required>
                        <input type="hidden" id="post_id" name="post_id" value="<?php echo $_GET['id'];?>">
                        <?php if(!isset($_SESSION['id'])): ?>
                        <input type="text" id="username" placeholder="Username" class="text-input" name="username" required>
                        <p>Not Logged in </p>
                        <?php else: ?>
                        <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username'];?>">
                        <p style="text-transform:capitalize"> <?php echo $_SESSION['username'] ?></p>
                        <?php endif;?>
                        <button class="btn" name="comment_submit"> Submit</button>
                    </form>
                </div>
                
                <?php $comments = selectComment('comments', 2, ['post_id' => $_GET['id'] , 'published' => '1']); ?>
                <div id="comments">
                <?php foreach($comments as $key => $comment): ?>
                <div class="comment-box">
                    <p><?php echo $comment['username']?> &nbsp; <span><?php echo date('F j, Y.', strtotime($comment['created_at'])); ?></span></p>
                    <p><?php echo $comment['comment']?> </p>
                </div>
                <?php endforeach; ?>
                
                </div>
                <button id="comment-btn" name="comment_S"> Show older Comments</button>
            </section>
                
        </div>
    </main>
    
    
    <?php include("footer.php")?>

    <script>
        $(document).ready(function() {  

            var post_idd = "<?php echo $_GET['id'] ?>";
            var commentCount = 2;
            $("#comment-btn").click(function(){
                commentCount = commentCount + 2;
                $("#comments").load("load_comments.php", {
                    commentNewCount: commentCount,
                    post_id:  post_idd
                });
            });
        });


    </script>
    
</body>
</html>