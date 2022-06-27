<?php 
require_once 'server/users.php';


if(!isset($_SESSION['id'])){
    header('location: signin.php');
    exit();
}

$allDeposits = calculateDeposits('amount', 'transactions', $_SESSION['id']);
$allCashouts = calculateCashouts('amount', 'transactions', $_SESSION['id']);
$walletBalance = calculateBalance('amount', 'transactions', $_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>

    <?php include('zheader.php') ?>

    <?php 

    $transactions = selectAll('transactions', ['user_idd' => $_SESSION['id']]);
    $userProfile = selectOne('users', ['id'=> $_SESSION['id']]);
    
    ?>

        <div class="main">
            <div class="indexx">

                <?php if(!$_SESSION['verified']): ?>
                    <div class="basic-info" style="text-transform: none;">
                        Please go to <strong style="text-transform: capitalize;"><?php echo $_SESSION['email'];?> </strong> to verify your account.
                        <form action="index.php" method="post"> <button type="submit" name="resend_verification" class="btn">Resend link</button> </form>
                    </div>
                <?php endif;?>

                

                <?php if($_SESSION['verified']): ?>
                    <div class="brief-info">
                        <?php if(empty($userProfile['firstname'])): ?> <div> &nbsp <?php  echo 'Please Update your profile' ?> <a href="processing/update_profile.php" style="color:blue; text-decoration:underline;">here</a> </div>  <?php endif; ?> 
                        <div class="fullname"> <?php echo $userProfile['firstname'] . ' ' . $userProfile['lastname']; ?> </div>

                        <div class="balance">(USD <?php echo $walletBalance; ?>.00)</div> 
                      
                        <div class="level">Verified User</div>
                    </div>
                <?php endif;?>
               
            </div>
            
            <div class="basic-info scroller">
                <h3>Transaction History</h3>
                <p>Deposits: $<?php echo $allDeposits; ?>.00</p>
                <p>Cashouts: $<?php echo $allCashouts; ?>.00</p>
                <p>Available: $<?php echo $walletBalance; ?>.00</p>
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
        </div>


    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    
    
</body>
</html>