<?php
$pageName = 'Notifications';
include('../path.php');
include('server.php');

if(!isset($_GET['noti'])){
    header('location: index.php');
}

if(isset($_GET['noti'])){
    $id = $_SESSION['id'];

    $sql = "UPDATE notification SET isRead='1' WHERE user_idd = $id"; 
    $result = mysqli_query($conn, $sql);
}

$notifications = selectAll('notification', ['user_idd' => $_SESSION['id']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        
        <div class="transaction scroll">
            <h2>Notifications</h2>
            <table>
                <thead>
                    <th>S/N</th>
                    <th>Messages</th>
                    <th>Date</th>
                </thead>
                <tbody>
                <?php foreach ($notifications as $key => $notification): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $notification['message'] ?></td>
                        <td><?php echo $notification['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
        
    </main>
    <?php include('footer.php'); ?>
    
</body>
</html>