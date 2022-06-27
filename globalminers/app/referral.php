<?php 
$pageName = 'Referrals';
require ('server.php');
$referrals = selectAll('users', ['referrer_id' => $_SESSION['username']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Dosis:wght@700&family=Lora:ital@1&family=Noto+Sans&family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
    
<body>
    
    <div class="wrapper">
    
        <?php include("header.php") ?>
        
        
            <?php $refs = checkRefRows('users', $_SESSION['username']) ?>
            <div class="dashboard-middle profile">
                <div class="right">
                    <p>Referral Information</p>
                    <p>Referrals: <span><?php echo $refs;?> </span></p>
                    <p>Referral Earning <span>$<?php echo $confirmedReferrals; ?></span></p>
                    <p>Referrer <span><?php $reff = selectOne('users', ['id' => $_SESSION["referrer_id"]]); echo $reff['username']; ?></span></p>
                    
                </div>

            </div>
            
            <div class="stats">
            <h3>Referral <span>List</span></h3>
            
            <div class="container profile">
                <div class="box">
                    <table>
                        <thead>
                            <th>S/N</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                        <?php foreach ($referrals as $key => $referral): ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $referral['username'] ?></td>
                                <td><?php echo $referral['email'] ?></td>
                                <td><?php echo $referral['created_at'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        </main>
    </div>
    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>