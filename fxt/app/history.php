<?php 
$pageName = 'Transactions';
include("../path.php");
require ('server.php');
$transactions = selectAll('transactions', ['user_idd' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName ?>/<?php echo $pageName ?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
</head>
    
<body>
    
    <div class="wrapper">
    
    <?php include("header.php") ?> 
        
            <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                        ?>
                    </div>
                <?php endif ?>
            
            <div class="stats">
            <h3>All <span>Transactions</span></h3>
            
            <div class="container profile">
                <div class="box">
                    <table>
                        <thead>
                            <th>S/N</th>
                            <th>T_id</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                            <?php foreach ($transactions as $key => $transaction): ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $transaction['id'] ?></td>
                                <td><?php echo '$'. $transaction['amount'] ?></td>
                                <td><?php echo $transaction['type'] ?></td>
                                <td><?php echo $transaction['status'] ?></td>
                                <td><?php echo date('F j, Y.', strtotime($transaction['created_at'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>