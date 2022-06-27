<?php
$pageName = 'Investments';
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

$Investments = selectAll('transactions', ['type' => 'Investment']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Investments</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        <div class="transaction scroll">
            <h2>Investments</h2>
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
                        <?php foreach ($Investments as $key => $Investment): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $Investment['user_idd'] ?></td>
                            <td><?php echo $Investment['id'] ?></td>
                            <td><?php echo $Investment['amount'] ?></td>
                            <td><?php echo $Investment['transAdd'] ?></td>
                            <td><?php echo $Investment['type'] ?></td>
                            <td><?php echo $Investment['status'] ?></td>
                            <td><?php echo $Investment['date'] ?></td>
                            
                            <td><a href="Investments.php?status=Confirmed&t_id=<?php echo $Investment['id']?>" >Confirmed</a></td>
                            <td><a href="checkT.php?interest=<?php echo $Investment['user_idd']?>&t_id=<?php echo $Investment['id']?>" >Check</a></td>
                            <td><a href="Investments.php?status=Cancelled&t_id=<?php echo $Investment['id']?>">Cancelled</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    <?php include(ROOT_PATH . '/app/footer.php'); ?>
    
</body>
</html>