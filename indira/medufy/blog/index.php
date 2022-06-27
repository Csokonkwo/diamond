<?php

include('../path.php');
include('../server/topics.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDUFIED</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="../css/footer.css">
    
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>
    
<body>
    
    <?php include('../header.php') ?>
    
    <main>
        <div class="under-header"></div>
	<?php if(isset($_SESSION['message'])): ?>
                    <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                        ?>
                    </div>
                <?php endif ?>
        
        <!----- carousel section ---------->
            <?php if(!isset($_GET['t_id'])): ?>
            <div class="post-slider">
                <h1 class="slider-title">Trending</h1>
                <i class="fa fa-chevron-left prev"></i>
                <i class="fa fa-chevron-right next"></i>

                <div class="slider-content">
                    <?php foreach ($trendings as $trending): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/blog/img/'. $trending['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h5><a href="single.php?id=<?php echo $trending['id'];?>"> <?php echo $trending['title']; ?></a></h5>
                            <i class="fa fa-user"> </i> <?php echo $trending['username']; ?> &nbsp;
                            <i class="fa fa-calendar"> <?php echo  date('F j, Y.', strtotime($trending['created_at'])); ?></i>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        <!----------- content----------->

        <div class="content clearfix">

            <div class="main-content">
                <h2 class="recent-post-title"><?php echo $postsTitle ?></h2>

                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/blog/img/'. $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                         <a class="alpha" href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title']; ?></a>
                        
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 50). '...'); ?>
                        </p>
                        <i class="fa fa-user"> <?php echo $post['username']; ?> </i> &nbsp;
                        <i fa fa-calendar> <?php echo date('F j, Y.', strtotime($post['created_at'])); ?></i>
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

     
        <?php include('footer.php') ?> 
    
</body>
</html>