<?php 

include('../path.php');
include('server.php');

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $t_id = $_GET['t_id'];
    update('shares', $t_id, ['status'=> $status]);
}

if(isset($_POST['update_Shares'])){
    unset($_POST['update_Shares']);
    update('shares_info', 1 , $_POST);
}

$shares = selectAll('shares');

$shares_info = selectOne('shares_info', ['id' => 1]);
 
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

        <div class="deposit">
            <div class="container">
                <div class="left">
                <h3>Shares Info </h3>
                    <form action="" method="post">
                        <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                        
                        <?php endif ?>

                            <input type="text" name="bankName" value= "<?php echo $shares_info['bankName']; ?>" class="text-input" placeholder="Bank Name">
                        
                            <input type="text" name="bankAccountName" class="text-input" value= "<?php echo $shares_info['bankAccountName']; ?>" placeholder="Bank Account Name">
                            
                            <input type="text" name="bankAccount" class="text-input" value= "<?php echo $shares_info['bankAccount']; ?>" placeholder="Bank Account Number">
                            
                            <input type="text" name="price" class="text-input" value= "<?php echo $shares_info['price']; ?>" placeholder="Shares Price">

                            <button type="submit" name="update_Shares" class="btn btn-big">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> All Shares History</div>
            <div class="container">

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>T_id</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th colspan="3">Action</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($shares as $key => $share): ?>
                        <tr>
                        <?php $userT = selectOne('users', ['id' => $share['user_id']]); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $userT['username'] ?></td>
                            <td><?php echo $share['id'] ?></td>
                            <td><?php echo $share['price'] ?></td>
                            <td><?php echo $share['quantity'] ?></td>
                            <td><?php echo $share['amount'] ?></td>
                            <td><?php echo $share['type'] ?></td>
                            <td><?php echo $share['status'] ?></td>
                            <td><?php echo date('F j, Y.', strtotime($share['created_at'])) ?></td>
                            
                            <td><a href="shares.php?status=pending&t_id=<?php echo $share['id']?>" >Pending</a></td>
                            <td><a href="shares.php?status=completed&t_id=<?php echo $share['id']?>" >Completed</a></td>
                        
                            <td><a href="shares.php?status=cancelled&t_id=<?php echo $share['id']?>">Cancel</a></td>
                            
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