<?php
$pageName = 'Deposits';
include('../path.php');
include('server.php');

if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, ['status'=> $status]);
}

$deposits = selectAll('transactions', ['type' => 'Deposit']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Deposits</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
        <div class="scroll">
            <h2>Deposits</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Currency</th>
                        <th>Trans Hash</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($deposits as $key => $deposit): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $deposit['user_idd']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $deposit['id'] ?></td>
                            <td><?php echo $deposit['amount'] ?></td>
                            <td><?php echo $deposit['currency'] ?></td>
                            <td><?php echo $deposit['transAdd'] ?></td>
                            <td><?php echo $deposit['type'] ?></td>
                            <td><?php echo $deposit['status'] ?></td>
                            <td><?php echo $deposit['created_at'] ?></td>
                            
                            <td><a href="deposits.php?status=Pending&t_id=<?php echo $deposit['id']?>" >Pending</a></td>
                            <td><a href="deposits.php?status=Confirmed&t_id=<?php echo $deposit['id']?>" >Confirm</a></td>
                        
                            <td><a href="deposits.php?status=Cancelled&t_id=<?php echo $deposit['id']?>">Cancel</a></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            
        </div>
        
    </main>
    <?php include("footer.php")?>
    
</body>
</html>