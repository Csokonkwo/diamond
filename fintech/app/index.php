<?php
$pageName = 'Dashboard';
include('../path.php');
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="dash-upper">
            <div class="dash-container">
                <p>$<?php echo $balance; ?></p>
            </div>
        </div>
        
        <div class="quick-actions">
            <h2>QUICK ACTIONS</h2>
            <div class="container">
                <div class="box">
                    <div>
                        <a href="<?php echo BASE_URL. '/app/profile.php' ?>"> <img src="img/profile.png"></a>
                        <p>Profile</p>
                    </div>
                </div>
                
                <div class="box">
                    <div>
                        <a href="<?php echo BASE_URL. '/app/deposit.php' ?>"> <img src="img/deposit.png"></a>
                        <p>Deposit</p>
                    </div>
                </div>
                
                <div class="box">
                    <div>
                        <a href="<?php echo BASE_URL. '/app/cashout.php' ?>"> <img src="img/cashout.png"></a>
                        <p>Cashout</p>
                    </div>
                </div>
                
                <div class="box">
                    <div>
                        <a href="<?php echo BASE_URL. '/app/referral.php' ?>"> <img src="img/referral.png"></a>
                        <p>Referrals</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="transaction scroll">
            <h2>Transaction History</h2>
            <?php $transactions = selectAll('transactions', ['user_idd' => $_SESSION['id']]); ?>
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
                            <td><?php echo $transaction['date'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include('footer.php'); ?>
    
</body>
</html>