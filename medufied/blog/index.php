<?php 
include("../path.php"); 
include(ROOT_PATH . "/blog/control/server/topics.php");
 
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
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    
<body>
    <?php include(ROOT_PATH . '/includes/header.php'); ?>
    <div class="under-header"></div>
    <?php include(ROOT_PATH . '/blog/control/includes/message.php'); ?>
    
    <div class="page-wrapper" onclick="mainBtn()">
        
        <!----- carousel section ---------->

        <div class="page-wrapper">
            <div class="post-slider">
                <h1 class="slider-title">Trending</h1>
                <i class="fa fa-chevron-left prev"></i>
                <i class="fa fa-chevron-right next"></i>

                <div class="post-wrapper">
                    <?php foreach ($trendings as $trending): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/blog/img/'. $trending['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h5><a href="single.php?id=<?php echo $trending['id'];?>"> <?php echo $trending['title']; ?></a></h5>
                            <i class="fa fa-user"> </i><?php echo $trending['username']; ?> &nbsp;
                            <i class="fa fa-calendar"> <?php echo  date('F j, Y.', strtotime($trending['created_at'])); ?></i>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!----------- content----------->

        <div class="content clearfix">

            <div class="main-content">
                <h2 class="recent-post-title"><?php echo $postsTitle ?></h2>

                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/blog/img/'. $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h1 class="h1-small"> <a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title']; ?></a></h1>
                        <i class="fa fa-user"> <?php echo $post['username']; ?></i> &nbsp;
                        <i fa fa-calendar> <?php echo date('F j, Y.', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 50). '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Read more</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search_term" class="text-input" placeholder="search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/blog/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name']; ?>"><?php echo $topic['name']; ?> </a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    <!------------ footer ----------->
    <?php include(ROOT_PATH. '/includes/footer.php'); ?>
    
    
    <script src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>