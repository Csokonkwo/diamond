<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> <?php if(isset($pageName)){ echo (' - ' . $pageName); } ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
    <?php
    if($ban['settings'] == 1):  ?>
        <link rel="stylesheet" href="css/dark.css">
    <?php endif;?>

</head>