<?php 

include("../path.php"); 
require("server.php");

$interests = selectStaz('interests', 30, ['user_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Earnings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>
        
        <div class="table">
            <h3>Your Earnings</h3>
            <table>
                <thead>
                    <th>S/n</th>
                    <th>T_id</th>
                    <th>Amount</th>
                    <th>Date</th>

                </thead>

                <tbody>
                <?php foreach ($interests as $key => $interest): ?>
                    <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $interest['id'] ?></td>
                    <td><?php echo $interest['amount'] ?></td>
                    <td><?php echo date('F j, Y.', strtotime($interest['created_at'])); ?></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>