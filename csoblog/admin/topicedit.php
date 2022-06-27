<?php 
include("../path.php");
include("server.php");

if($_SESSION['admin'] <= 2){
    header("location: index.php");
    exit();
}

//gets and auto fill topic edit form
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_GET['tdel_id'])){
    $id = $_GET['tdel_id'];
    $count = delete('topics', $id);
    $_SESSION['message'] = 'Topic deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: '. $goTopicIndex);
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
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php include("header.php"); ?>
    
    <!----------- Main section ---------------->
    
    <main>
    <div class="admin-content">
            <div class="button-group">
                <a href="topicedit.php" class="btn btn-big">Add topic</a>
                <a href="topics.php" class="btn btn-big">Manage topic</a>
            </div>
            
            <div class="form-container">
                <br>
                <h2 class="page-title">Edit Topic</h2>
                <?php include("errors.php") ?>
                <form action="topicedit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                        
                         <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description; ?></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="update_topic" class="btn btn-big">Update Topic</button>
                    </div>
                </form>
            </div>
        </div>

</main>

<?php include("footer.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="js/script.js"></script>