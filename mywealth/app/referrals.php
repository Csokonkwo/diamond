<?php 

include("../path.php"); 
require("server.php");
$pageName = "Referrals";
$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body>
    
    <?php include("header.php"); ?>
    <?php $refs = checkRefRows('users', $_SESSION['id']) ?>
    
    <main>
        
        <div class="profile">
            <p>Referral Information</p>
            <p>Total Referrals: <?php echo $refs;?> </p>
            <p>Referral earnings: $<?php echo $confirmedReferrals; ?></p>
            <p>Referrer: <?php $referrer = selectOne('users', ['id' => $_SESSION['referrer_id']]); if(isset($referrer['username'])){echo $referrer['username'];} ?></p>
            <p>Referral_link: <br> https://<?php echo $companyEmail; ?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?></p>
            
        </div>
        
       <br>
        
        <div class="table">
            <h3>Your Referrals</h3>
            <table>
                <thead>
                    <th>S/n</th>
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
    </main>
    
    <?php include("footer.php"); ?>
    
</body>
</html>