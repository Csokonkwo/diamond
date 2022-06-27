<?php 

include('../path.php');
include('server.php');

include('../register/mailer.php');

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactionz', $t_id, ['status'=> $status, 'other_ref' => $_SESSION['username']]);
    if(isset($_GET['u_id'])){
        $casUser = selectOne('users', ['id' => $_GET['u_id']]);
        sendCashoutConfirm($casUser['email'], $casUser['username'], $_GET['a_id']);
    }
}

$withdraws = selectAll('transactionz', ['type' => 'withdrawal']);

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
            <h3>All Withdrawals</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Method</th>
                        <th>Wallet_Address</th>
                        <th>Bank_Name</th>
                        <th>Bank_Account</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($withdraws as $key => $withdraw): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $withdraw['user_id']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $withdraw['id'] ?></td>
                            <td><?php echo $withdraw['amount'] ?></td>
                            <td><?php echo $withdraw['payment_method'] ?></td>

                            <td><?php if($withdraw['reference']){echo $withdraw['reference'];} else{echo "Nil";} ?></td>
                            <td><?php if($withdraw['other_ref']){echo $withdraw['other_ref'];} else{echo "Nil";} ?></td>
                            <td><?php if($withdraw['other_date']){echo $withdraw['other_date'];} else{echo "Nil";} ?></td>

                            <td><?php echo $withdraw['status'] ?></td>
                            <td><?php echo $withdraw['created_at'] ?></td>

                            <?php if($withdraw['status'] != 'paid' && $_SESSION['admin'] > 4): ?>
                            <td><a href="withdraw.php?status=paid&t_id=<?php echo $withdraw['id']?>&u_id=<?php echo $withdraw['user_id'] ?>&a_id=<?php echo $withdraw['amount'] ?>"> Paid</a></td>
                            
                            <td><a href="withdraw.php?status=cancelled&t_id=<?php echo $withdraw['id']?>">Cancel</a></td>                       
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>