<?php

include("../path.php");
require("server.php");
$pageName = "Referrals";
$user = selectOne('users', ['id' => $_SESSION['id']]);
$referrals = selectAll('users', ['referrer_id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include("head.php") ?>
</head>

<body>
    <?php include("header.php") ?>

    <div class="profile"> 
           <div class="container">
               
               <div class="right">
                   <div class="head">
                       <a href="">Referrals</a>
                   </div>
                   
                   <div class="content">
                       <h2>Referral Details</h2>
                       <p>Guider <span><?php $referrer = selectOne('users', ['id' => $_SESSION['referrer_id']]); if(isset($referrer['username'])){echo $referrer['username'];} else{ echo 'None';} ?></span></p>
                       <p>Username <span><?php echo $user['username'] ?></span></p>
                       <p>Total Referrals<span><?php echo count($referrals)?></span></p>
                       <p>Referral Earnings<span>$<?php echo $confirmedReferrals; ?></span></p>
                       <p>Account Balance<span>$<?php echo $balance ?></span></p>
                       <p>
                            Referral Link: <br> <br> <input type="text" id="myInput" value="https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>"> <button onclick="copyItem()">Copy Link</button>
                            <br><br> https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>
                       </p>
                   </div>
               </div>
           
           </div>
        </div>
        
        
        
        <div class="transaction">
            <div class="content"> <i class="fa fa-calendar"> </i> Referrals</div>
            <div class="container">
                
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
        </div>
        
        <?php include("footer.php") ?>
    
</body>
</html>