<?php

include("../path.php");
require("server.php");
$pageName = "Profile";
$user = selectOne('users', ['id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">

<?php require("head.php") ?>

<body>
    <?php include("header.php") ?>
        
       <div class="profile"> 
           <div class="container">
               <div class="left">
                    <?php if(isset($user['image'])): ?>
                   <img src="img/img/<?php echo $user['image']?>">
                    <?php else: ?>
                    <img src="img/img/profile.jpg">
                    <?php endif; ?>

                   <h2><?php echo $user['username'] ?></h2>
                   <?php $status = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'investment']) ?>
                   <p>Current Balance<a>$<?php echo $balance ?></a></p>
                   <p>Current Plan <a> <?php if(isset($status['reference'])){ echo $status['reference'];} else{echo "None";} ?></a></p>                    <?php $status = selectOne('transactionz', ['user_id' => $_SESSION['id'], 'type' => 'deposit', 'status' => 'confirmed']) ?>
                   <p>Status <a><?php if(isset($status)){echo 'Active';} else{echo "Inactive"; }?> </a></p>
                   <p>Verified <a><?php if($user['verified']){echo 'Yes';} else{echo "No"; }?> </a></p>
                   <?php $referrer = selectOne('users', ['id' => $user['referrer_id']]); ?>
                   <p>Guider <a><?php if(isset($referrer['username'])){echo $referrer['username'];} else{ echo "None";} ?></a></p>
                   
                   <?php if(!isset($user['image'])): ?>
                   <form method="POST" enctype="multipart/form-data">
                        <?Php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <?php foreach($errors as $error): ?>
                                <li><?php echo $error; ?>.</li>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                       <input type="file" name="image" enctype="multipart/form-data">
                       <button type="submit" name="upload_image"> Upload Image</button>
                   </form>
                    <?php endif; ?>
               </div>
               
               <div class="right">
                   <div class="head">
                       <a href="../register/update_profile.php">Update Profile</a>
                       <a href="../register/update_password.php">Change Password</a>
                   </div>
                   
                   <div class="content">
                       <h2>Account Details</h2>
                       <p>Fullname <span><?php if(isset($user['firstname'])){echo $user['firstname'] . ' '; echo $user['lastname'] ;} else{echo '<a href="../register/update_profile.php"> Please update profile </a>';}?> </span></p>
                       <p>Username <span><?php echo $user['username'] ?></span></p>
                       <p>Email<span><?php echo $user['email'] ?></span></p>
                       <p>Mobile<span><?php if(isset($user['phone'])){echo $user['phone'];} else{echo '<a href="../register/update_profile.php"> Update profile </a>';}?></span></p>
                       <p>Country<span><?php echo $user['country'] ?></span></p>
                       <p>Gender<span><?php if(isset($user['gender'])){echo $user['gender'];} else{echo '<a href="../register/update_profile.php"> Update profile </a>';}?></span></p>
                       <p>Date Created<span><?php echo date('F j, Y.', strtotime($user['created_at'])) ?></span></p>
                       <p>
                            Referral Link: <br> <br> <input type="text" id="myInput" value="https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>"> <button onclick="copyItem()">Copy Link</button>
                            <br><br> https://<?php echo $companyEmail?>.com/register/signup.php?ref=<?php echo $_SESSION['id'] ?>
                       </p>
                   </div>
               </div>
           
           </div>
        </div>
        
        
        
        <?php include("footer.php") ?>
    
</body>
</html>