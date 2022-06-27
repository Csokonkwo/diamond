<?php 

include("path.php");
include(ROOT_PATH . "/includes/dbFunctions.php"); 
$pageName = "News";

if(isset($_GET['id'])){
    $news = selectOne('news', ['id' => $_GET['id']]);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.php"); ?>

    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <?php include("includes/header.php")?>
    <!----------- Main section ---------------->
    
    <main>

        <!-------------- Hero Section --------->

        <?php include(ROOT_PATH . "/includes/hero.php"); ?>

        <div class="single">
            <div class="container">
                <h1><?php echo $news['title']; ?></h1>
                <p><i><?php echo $news['username']; ?></i> <i><?php echo date('F j, Y.', strtotime($news['created_at'])); ?></i></p>
                
                <img src="<?php echo BASE_URL . '/admin/img/'. $news['image']; ?>" alt="" class="post-image single-image">

                <p><?php echo html_entity_decode($news['body']); ?></p>

            </div>
        </div>
    </main>
    
    
    <?php include("includes/footer.php")?>

    <!-- <script>
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
     -->
</body>
</html>