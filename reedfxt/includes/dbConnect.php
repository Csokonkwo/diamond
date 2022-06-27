<?php

//$hostname = 'localhost';
//$dbuser = 'reedfxtc_cso';
//$dbpassword ='whyman.';
//$dbname = 'reedfxtc_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>