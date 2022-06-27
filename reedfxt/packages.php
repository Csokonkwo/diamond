<?php

include("path.php");
include("includes/dbFunctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?>  - Packages</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@600&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    
    <?php include("includes/header.php"); ?>
    
    <main>
    
    <!-------------- Hero Section --------->
    
     <div id="hero" class="hero-other">
        <h1>Terms and Condition</h1>
         
    </div>
        
    <!------------- Package section ---------------->
    
    <?php include("includes/packages.php") ?>
        
    </main>
    
    <?php include("includes/footer.php") ?>
    
</body>
</html>