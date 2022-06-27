<?php
$pageName = 'Cashouts';
include('../path.php');
include('server.php');

if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, [status=> $status]);
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
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        <div class="transaction scroll">
            <h2>Cashouts</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>U_Id</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Bit Addr</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($cashouts as $key => $cashout): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $cashout['user_idd'] ?></td>
                            <td><?php echo $cashout['id'] ?></td>
                            <td><?php echo $cashout['amount'] ?></td>
                            <td><?php echo $cashout['transAdd'] ?></td>
                            <td><?php echo $cashout['type'] ?></td>
                            <td><?php echo $cashout['status'] ?></td>
                            <td><?php echo $cashout['date'] ?></td>
                            
                            <td><a href="cashouts.php?status=Pending&t_id=<?php echo $cashout['id']?>" >Pending</a></td>
                            <td><a href="cashouts.php?status=Paid&t_id=<?php echo $cashout['id']?>" >Paid</a></td>
                            
                            <td><a href="cashouts.php?status=Cancelled&t_id=<?php echo $cashout['id']?>">Cancelled</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    
</body>
</html>