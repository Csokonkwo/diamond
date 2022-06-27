<?php 
include("../path.php");
include("server/topics.php");
include("server/server.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@500&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<?php include("header.php"); ?>
    
    <!----------- Main section ---------------->
    
    <main>
    <div class="admin-content">
            <?php $newsletters = selectAll('newsletters') ?>
            
            <div class="content">
                <br>
                <h2 class="page-title">Manage newsletters</h2>
                <?php include('message.php'); ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Email</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                    <?php foreach ($newsletters as $key => $newsletter): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $newsletter['email'] ?></td>
                            <td><?php echo $newsletter['created_at'] ?></td>
                            
                            
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>

    <?php include("footer.php"); ?>