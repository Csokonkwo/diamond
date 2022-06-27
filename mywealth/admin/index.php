<?php 

include('../path.php');
include('server.php');

 $transactions = selectAll('transactionz');  
 
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
            <h3>All Transaction History</h3>
            <?php $transactions = selectAll('transactionz');  ?>
            <table>
                    <thead>
                        <th>S/N</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                    <?php foreach ($transactions as $key => $transaction): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $transaction['user_id']]); 
                            if($transaction['type'] == 'Deposit'){
                                $color='green'; 
                            }
                            if($transaction['type'] == 'withdraw'){
                                $color='red'; 
                            }
                            if($transaction['type'] == 'Investment'){
                                $color='blue'; 
                            }
                            if($transaction['type'] == 'Interest'){
                                $color='green'; 
                            }

                            if($transaction['type'] == 'Referral'){
                                $color='green'; 
                            }
                        
                        ?>
                            <td style="color:<?php echo $color?>"><?php echo $key + 1 ?></td>
                            <td style="color:<?php echo $color?>"><?php echo $userT['username'] ?></td>
                            <td style="color:<?php echo $color?>"><?php echo $transaction['id'] ?></td>
                            <td style="color:<?php echo $color?>"><?php echo '$'. $transaction['amount'] ?></td>
                            <td style="color:<?php echo $color?>"><?php echo $transaction['type'] ?></td>
                            <td style="color:<?php echo $color?>"><?php echo $transaction['status'] ?></td>
                            <td style="color:<?php echo $color?>"><?php echo date('F j, Y.', strtotime($transaction['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>