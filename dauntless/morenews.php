<?php

include("path.php");
include("includes/dbFunctions.php");
$pageName = 'Recent News';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/head.php"); ?>
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/carousel.css">
    
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>

    <div class="morenews">
            <h1>Latest on Forex</h1>
            <div class="container">
            <?php $news = selectStaz('news', 10, ['published' => 1]); ?>
                <?php foreach($news as $new): ?>
                <div class="box">
                    <img src="admin/img/<?php echo $new['image']?>" alt="">
                    <div class="post">
                        <h2><a href="news.php?id=<?php echo $new['id'] ?>"> <?php echo $new['title'] ?>. </a>  </h2>
                        <small><i class="fa fa-user"></i> <?php echo $new['username'] ?>, </small> <small><i class="fa fa-calendar"></i> <?php echo date('F j, Y.', strtotime($new['created_at'])); ?>.</small>
                        <p> <?php echo html_entity_decode(substr($new['body'], 0, 110). '...'); ?> </p> 
                        <a class="read" href="news.php?id=<?php echo $new['id'] ?>"> Read more </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>