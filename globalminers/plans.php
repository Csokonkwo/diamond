<?php
$companyName = 'Globalminers';

include("path.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName;?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/investment.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    
   <?php  include("includes/header.php"); ?>
   <main>
     <!-------------- Hero Section --------->
    
     <div id="hero" class="hero-other">
        <h1>Investment Plans</h1>
    </div>
    
    <!-------------- Plans Section --------->

    <?php include("includes/plans.php"); ?>
    
    </main>
    
    <?php include("includes/footer.php"); ?>
</body>
</html>