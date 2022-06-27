<?php
$pageName = 'CheckTs';
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

$CheckTs = selectAll('transactions', ['user_idd'=>$_GET['interest']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/CheckTs</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        <div class="transaction scroll">
            <h2>CheckTs</h2>
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
                        <?php foreach ($CheckTs as $key => $CheckT): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $CheckT['user_idd'] ?></td>
                            <td><?php echo $CheckT['id'] ?></td>
                            <td><?php echo $CheckT['amount'] ?></td>
                            <td><?php echo $CheckT['transAdd'] ?></td>
                            <td><?php echo $CheckT['type'] ?></td>
                            <td><?php echo $CheckT['status'] ?></td>
                            <td><?php echo $CheckT['date'] ?></td>
                            
                            <?php if($CheckT['type'] == 'Investment'): ?>
                            <td><a href="CheckT.php?interest=<?php echo $CheckT['user_idd']?>&status=Confirmed&t_id=<?php echo $CheckT['id']?>" >Confirmed</a></td>
                            <?php if($CheckT['status'] != 'Completed'): ?>
                            <td><a href="checkT.php?interest=<?php echo $CheckT['user_idd']?>&amount=<?php echo $CheckT['amount']?>&Complet=Pay&t_id=<?php echo $CheckT['id']?>" >Completed</a></td>
                            <?php endif; ?>
                            <td><a href="CheckT.php?interest=<?php echo $CheckT['user_idd']?>&status=Cancelled&t_id=<?php echo $CheckT['id']?>">Cancelled</a></td>                       
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    
</body>
</html>