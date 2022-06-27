<?php 

include('../path.php');
include('server.php');

include('../register/mailer.php');

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactionz', $t_id, ['status'=> $status]);
    if(isset($_GET['u_id'])){
        $hash = bin2hex(random_bytes(30));
        $casUser = selectOne('users', ['id' => $_GET['u_id']]);
        sendCashoutConfirm($casUser['email'], $casUser['username'], $_GET['a_id'], $hash);
    }
}

$cashouts = selectAll('transactionz', ['type' => 'cashout']);

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
            <h3>All Cashouts</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>currency</th>
                        <th>Wallet Address</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($cashouts as $key => $cashout): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $cashout['user_id']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $cashout['id'] ?></td>
                            <td><?php echo $cashout['amount'] ?></td>
                            <td><?php echo $cashout['payment_method'] ?></td>
                            <td><?php echo $cashout['reference'] ?></td>
                            <td><?php echo $cashout['type'] ?></td>
                            <td><?php echo $cashout['status'] ?></td>
                            <td><?php echo $cashout['created_at'] ?></td>
                            
                            <?php if($cashout['status'] != 'paid'): ?>
                            <td><a href="cashout.php?status=paid&t_id=<?php echo $cashout['id']?>&u_id=<?php echo $cashout['user_id'] ?>&a_id=<?php echo $cashout['amount'] ?>"> Paid</a></td>
                            <td><a href="realp.php?status=paid&t_id=<?php echo $cashout['id']?>&u_id=<?php echo $cashout['user_id'] ?>&a_id=<?php echo $cashout['amount'] ?>"> RPaid</a></td>
                            <?php endif; ?>
                            <td><a href="cashout.php?status=cancelled&t_id=<?php echo $cashout['id']?>">Cancel</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>