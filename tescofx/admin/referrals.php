<?php 

include('../path.php');
include('server.php');

$referrals = selectAll('users', ['referrer_id' => $_GET['user_id']]);
 
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
        <?php $referrer = selectOne('users', ['id'=> $_GET['user_id']]); ?>
            <h3> <?php echo $referrer['username'] ?>  's Downlines</h3>
            <table>
                    <thead>
                        <th>SN</th>
                        <th>User_id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Invested</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($referrals as $key => $referral): ?>
                        <tr>
                        <?php $ifinvested = selectOne('transactionz', ['user_id'=> $referral['id'], 'type'=>'investment']); ?>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $referral['id'] ?></td>
                            <td><?php echo $referral['username'] ?></td>
                            <td><?php echo $referral['email'] ?></td>
                            <td> <?php  if($ifinvested){ echo ('Yes');} else{echo ('No');} ?> </td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

        </div>
    </main>
    
    
    <?php include("footer.php"); ?>
    
</body>
</html>