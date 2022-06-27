<?php

// $hostname = 'localhost';
// $dbuser = 'newcrest_cso';
// $dbpassword ='somalala';
// $dbname = 'newcrest_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>