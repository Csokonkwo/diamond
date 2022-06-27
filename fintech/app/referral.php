<?php
$pageName = 'Referrals';
include('../path.php');
include('server.php');

$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27416b154a.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('header.php'); ?>
        
    <main>
        <div class="under-header"></div>
        
        <div class="transaction scroll">
            <h2>Your Referrals</h2>
            <table>
                <thead>
                    <th>S/N</th>
                    <th>Username</th>
                    <th>Email</th>
                </thead>
                <tbody>
                <?php foreach ($referrals as $key => $referral): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $referral['username'] ?></td>
                        <td><?php echo $referral['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
        
    </main>
    <?php include('footer.php'); ?>
    
</body>
</html>