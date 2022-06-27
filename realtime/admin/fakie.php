<?php 

include('../path.php');
include('server.php');

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('transactionz', $t_id, ['status'=> $status]);

    $fakie = selectOne('transactionz', ['id' => $t_id]);
    $fakie_username = selectOne('users', ['id' => $fakie['user_id']]);

    $_POST['username'] = $fakie_username['username'];
    $_POST['amount'] = $fakie['amount'];
    $_POST['type'] = 'deposit';
    $_POST['status'] = 'confirmed';
    $_POST['created_at'] = $fakie['created_at'];

    $makedep = createUser('fakie', $_POST);
    
    header('location: deposit.php');
    exit();
}

$deposits = selectAll('fakie');
 
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
        
        <div class="form">
            
            <form action="" method="post">

                <?Php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?>.</li>
                    <?php endforeach ?>
                </div>
                <?php endif ?>

                <br>
                    <input type="text" name="username" value= "<?php echo $username; ?>" class="text-input" placeholder="Username">
                
                    <input type="text" name="amount" class="text-input" value= "<?php echo $amount; ?>" placeholder="Amount">
                
                    <select name="type">
                    <option value="">Select Transaction Type</option>
                        <option value="deposit">Deposit</option>
                        <option value="withdrawal">Withdrawal</option>
                    </select>
                    
                    <button type="submit" name="fakie" class="btn btn-big">Submit</button>
                
            </form>
            
        </div>
        
        <div class="table">
            <h3>All Transactions</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>amount</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($deposits as $key => $deposit): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $deposit['username'] ?></td>
                            <td><?php echo $deposit['id'] ?></td>
                            <td><?php echo $deposit['amount'] ?></td>
                            <td><?php echo $deposit['type'] ?></td>
                            <td><?php echo $deposit['status'] ?></td>
                            <td><?php echo date('F j, Y.', strtotime($deposit['created_at'])) ?></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>