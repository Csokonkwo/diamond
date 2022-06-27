<?php
$pageName = 'Cashouts';
include('../path.php');
include('server.php');
include('../register/mailer.php');

if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, ['status'=> $status]);
    if(isset($_GET['u_id'])){
        $hash = bin2hex(random_bytes(30));
        $casUser = selectOne('users', ['id' => $_GET['u_id']]);
        sendCashoutConfirm($casUser['email'], $casUser['username'], $_GET['a_id'], $hash);
    }
}

$cashouts = selectAll('transactions', ['type' => 'Cashout']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Cashouts</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
        <div class="scroll">
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>currency</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($cashouts as $key => $cashout): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $cashout['user_idd']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $cashout['id'] ?></td>
                            <td><?php echo $cashout['amount'] ?></td>
                            <td><?php echo $cashout['currency'] ?></td>
                            <td><?php echo $cashout['transAdd'] ?></td>
                            <td><?php echo $cashout['type'] ?></td>
                            <td><?php echo $cashout['status'] ?></td>
                            <td><?php echo $cashout['created_at'] ?></td>
                            
                            <td><a href="cashouts.php?status=Pending&t_id=<?php echo $cashout['id']?>" >Pending</a></td>
                            <td><a href="cashouts.php?status=Paid&t_id=<?php echo $cashout['id']?>&u_id=<?php echo $cashout['user_idd'] ?>&a_id=<?php echo $cashout['id']?>&a_id=<?php echo $cashout['amount'] ?>" >Paid</a></td>
                            
                            <td><a href="cashouts.php?status=Cancelled&t_id=<?php echo $cashout['id']?>">Cancelled</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include("footer.php")?>
    
</body>
</html>