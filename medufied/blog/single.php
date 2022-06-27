<?php 
include("../path.php");
include(ROOT_PATH . "/blog/control/server/posts.php");

if(isset($_GET['id'])){
$post = selectOne('posts', ['id' => $_GET['id']]);

}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $post['title']; ?>| Medufied </title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/footer.css">
</head> 
    
<body>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
    <div class="under-header"></div>
    <div class="page-wrapper">
          
        <!----------- content----------->

        <div class="content clearfix">
            <div class="main-content-wrapper">

            <div class="main-content single">
                <h1 class="post-title">

                <?php echo $post['title']; ?>

                </h1>
                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
            </div>
            </div>

            <div class="sidebar single">

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/blog/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name']; ?>"> <?php echo $topic['name']; ?> </a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    <!--------------- footer ------->

    <?php include(ROOT_PATH. '/includes/footer.php'); ?>
    
    
    <script src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>