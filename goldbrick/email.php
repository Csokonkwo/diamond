<?php 
include("includes/dbFunctions.php");
include("register/mailer.php");

$allUsers = selectAll('users');

foreach($allUsers as $allUser){
    sendUpgrade($allUser['email'], $allUser['username']);
}

echo "Done";

?>