<?php

//$hostname = 'localhost';
//$dbuser = 'jarmoinv_cso';
//$dbpassword ='manwar2030';
//$dbname = 'jarmoinv_general';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>