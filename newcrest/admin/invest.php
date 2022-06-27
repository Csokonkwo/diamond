<?php 

include('../path.php');
include('server.php');


if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactionz', $t_id, ['status'=> $status]);
}

$investments = selectAll('transactionz', ['type' => 'investment']);

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
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> All Investment History</div>
            <div class="container">
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>package</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Num of pay</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($investments as $key => $investment): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $investment['user_id']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $investment['id'] ?></td>
                            <td><?php echo $investment['amount'] ?></td>
                            <td><?php echo $investment['reference'] ?></td>
                            <td><?php echo $investment['type'] ?></td>
                            <td><?php echo $investment['status'] ?></td>
                            <td><?php echo $investment['payment_method'] ?></td>
                            <td><?php echo $investment['created_at'] ?></td>
                            <?php if($investment['status'] != 'Completed'): ?>
                            <td><a href="invest.php?status=confirmed&t_id=<?php echo $investment['id']?>" >Confirm</a></td>
                            <td><a href="invest.php?status=completed&t_id=<?php echo $investment['id']?>" >Complete</a></td>
                            <?php endif; ?>
                            <td><a href="invest.php?status=pending&t_id=<?php echo $investment['id']?>">Pending</a></td>                       
                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>