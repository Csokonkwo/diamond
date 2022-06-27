<?php

//$hostname = 'localhost';
//$dbuser = 'tescofxc_cso';
//$dbpassword ='tescomanner';
//$dbname = 'tescofxc_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>