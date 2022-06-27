<?php

// $hostname = 'localhost';
// $dbuser = 'growtcapass_cso';
// $dbpassword ='yagination1';
// $dbname = 'growtcapass_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>