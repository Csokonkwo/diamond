<?php 
include("path.php");


if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}

include("includes/server.php");

$results_per_page = 2;

$check = "SELECT * FROM posts WHERE published = 1";
$checkresult = mysqli_query($conn, $check);
$number_of_results = mysqli_num_rows($checkresult);

$number_of_pages = ceil($number_of_results/$results_per_page);

if(isset($_GET['logout'])){
    
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    
    header('location: index.php');
    exit();
}

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
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
                <br>
            </div>
        <?php endif ?>

        <div class="trending clearfix">
            <?php foreach ($tops as $top): ?>
                <?php $comment = calculateAll('comments', $top['id']); ?>
            <img src="<?php echo BASE_URL . '/admin/img/img/'. $top['image']; ?>" alt="">
            <div>
                <h3>
                    <a href="single.php?id=<?php echo $top['id'];?>"> <?php echo $top['title']; ?> </a>
                </h3>
                <p class="username"><?php echo $top['username'];?></p>
                <i class="fa fa-calendar"> <?php echo date('F j, Y.', strtotime($top['created_at'])); ?> </i> <i class="fa fa-comment-o"> <?php echo $comment;?> Comment<?php if($comment >= 2){echo('s');} ?></i>
                <p>
                <?php echo html_entity_decode(substr($top['body'], 0, 100). '...'); ?>
                    <a href="single.php?id=<?php echo $top['id'];?>" class="btn">Read More>></a>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
        
        
        <section class="latest-cont">
            <h2><?php echo $postsTitle ?></h2>
            <?php foreach ($posts as $post): ?>
                <?php $comment = calculateAll('comments', $post['id']); ?>
            <div class="latest clearfix">
                <img src="<?php echo BASE_URL . '/admin/img/img/'. $post['image']; ?>" alt="">
                <div>
                    <h3>
                        <a href="single.php?id=<?php echo $post['id'];?>"> <?php echo $post['title']; ?> </a>
                    </h3>
                    <i class="fa fa-calendar"> <?php echo date('F j, Y.', strtotime($post['created_at'])); ?> </i>  <i class="fa fa-comment-o"> <?php echo $comment;?> Comment<?php if($comment >= 2){echo('s');} ?></i>
                    <p>
                    <?php echo html_entity_decode(substr($post['body'], 0, 100). '...'); ?>
                        <a href="single.php?id=<?php echo $post['id'];?>">Read More</a>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>

            <?php if(!isset($_GET['t_id']) && !isset($_GET['search_term'])): ?>
            <div class="pagination">
            <?php for($i=1; $i<= $number_of_pages; $i++):
                if($i == $page): ?>
                    <a class="pager active" href="index.php?page=<?php echo $i ?>"> <?php echo $i ?></a>
                <?php else: ?>
                    <a  class="pager" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                <?php endif; ?>
                <?php endfor; ?>
            </div>
            <?php endif; ?>
        </section>
        
        <?php if(!isset($_GET['t_id']) && !isset($_GET['search_term'])): ?>
        <?php foreach ($bottoms as $bottom): ?>
            <?php $comment = calculateAll('comments', $bottom['id']); ?>
        <div class="trending clearfix bottom">
            <img src="<?php echo BASE_URL . '/admin/img/img/'. $bottom['image']; ?>" alt="">
            <div>
                <h3>
                    <a href="single.php?id=<?php echo $bottom['id'];?>"> <?php echo $bottom['title']; ?> </a>
                </h3>
                <p class="username"><?php echo $bottom['username'];?></p>
                <i class="fa fa-calendar"> <?php echo date('F j, Y.', strtotime($bottom['created_at'])); ?></i>  <i class="fa fa-comment-o">  <?php echo $comment;?> Comment<?php if($comment >= 2){echo('s');} ?></i>
                <p class="parag">
                <?php echo html_entity_decode(substr($bottom['body'], 0, 50). '...'); ?>
                    <a href="single.php?id=<?php echo $bottom['id'];?>" class="btn">Read More>></a>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        
        </main>
        
        <?php include("footer.php")?>
    
</body>
</html>