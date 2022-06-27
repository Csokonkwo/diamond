<?php
$pageName = 'Check User Transactions';
include('../path.php');
include('server.php');

if($_SESSION['admin'] < 4){
    header('location: ../app/index.php');
    exit();
}

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, ['status' => $status]);
}

$CheckTs = selectAll('transactions', ['user_idd'=>$_GET['user'], 'type' => 'investment', 'id'=>$_GET['t_id']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/CheckTs</title>
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/main.css">
    <link rel="stylesheet" href="../app/css/form.css">

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>


    <div class="form-container">
            
            <form action="checkT.php" method="post">

                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <br>
                    <input type="hidden" name="t_id" value= "<?php echo $_GET['t_id']; ?>">
                    <input type="hidden" name="user_idd" value= "<?php echo $_GET['user']; ?>">
                
                    <input type="text" name="amount" class="text-input" value= "<?php echo $amount; ?>" placeholder="Amount">
                
                    <button type="submit" name="pay_interest" class="btn btn-big">Pay Earning</button>
                
            </form>
            
        </div>
        <br>
        
        <div class="scroll">
                <table>
                    <thead>
                        <th>SN</th>
                        <th>U_Id</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Bit Addr</th>
                        <th>Plan</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($CheckTs as $key => $CheckT): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $CheckT['user_idd'] ?></td>
                            <td><?php echo $CheckT['id'] ?></td>
                            <td><?php echo $CheckT['amount'] ?></td>
                            <td><?php echo $CheckT['transAdd'] ?></td>
                            <td><?php echo $CheckT['currency'] ?></td>
                            <td><?php echo $CheckT['type'] ?></td>
                            <td><?php echo $CheckT['status'] ?></td>
                            <td><?php echo $CheckT['created_at'] ?></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
        </div>
        
    </main>
    
    <?php include("footer.php")?>
    
</body>
</html>