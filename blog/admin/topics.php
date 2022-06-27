<?php 
include("../path.php");
include("server/topics.php");
include("server/server.php");

if($_SESSION['admin'] <= 2){
    header("location: index.php");
    exit();
}

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
</head>
<body>
    <?php include("header.php"); ?>
    
    <!----------- Main section ---------------->
    
    <main>

    <div class="admin-content">
            <div class="button-group">
                <a href="topicadd.php" class="btn btn-big">Add topic</a>
                <a href="topics.php" class="btn btn-big">Manage topics</a>
            </div>
             
            <div class="content">
                <br>
                <h2 class="page-title">Manage Topics</h2>
                <?php include('message.php'); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                        <tr>
                            <td><?php echo $key + 1; ?> </td>
                            <td><?php echo $topic['name']; ?> </td>
                            <td><a href="topicedit.php?id= <?php echo $topic['id']; ?>" class="edit">edit</a></td>
                            <td><a href="topics.php?tdel_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


</main>

<?php include("footer.php"); ?>