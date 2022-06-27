<?php
$pageName = 'Transactions';
include('../path.php');
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
      
        <div class="scroll">
            <h2>Transaction History</h2>
            <?php $transactions = selectAll('transactions'); ?>
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
                        <?php $userT = selectOne('users', ['id' => $transaction['user_idd']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
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
        
    </main>
    <?php include("footer.php")?>
    
</body>
</html>