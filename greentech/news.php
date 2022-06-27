<?php 

include('path.php');
include('database.php');
$companyName = 'Greentech'; 

if(isset($_GET['id'])){
    $news = selectOne('posts', ['id' => $_GET['id']]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GREENTECH</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/widget.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    
<body>
    <?php include('includes/header.php') ?>

    <main>
        <div class="news">
            <h1><?php echo $news['title']; ?></h1>

            <div class="news-news"> <?php echo html_entity_decode($news['body']); ?> </div>
        </div>

        <!---- check footer --->
        <?php include('includes/footer.php') ?>

</body>
</html>