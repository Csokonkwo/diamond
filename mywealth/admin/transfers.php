<?php 

include('../path.php');
include('server.php');

$transfers = selectAll('transactionz', ['type' => 'transfer', 'status' => 'received']);
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $companyName; ?> - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    
</head>
<body>
    
    <?php include("header.php"); ?>
    
    <main>

        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>
        
        <div class="table">
            <h3>All Transfers</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Type</th>
                        <th>Reference</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($transfers as $key => $transfer): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $transfer['user_id']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $transfer['id'] ?></td>
                            <td><?php echo $transfer['amount'] ?></td>
                            <td><?php echo $transfer['payment_method'] ?></td>
                            <td><?php echo $transfer['reference'] ?></td>
                            <td><?php echo $transfer['status'] ?></td>
                            <td><?php echo date('F j, Y.', strtotime($transfer['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>