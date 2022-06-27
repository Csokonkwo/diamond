<?php

//$hostname = 'localhost';
//$dbuser = 'globalmi_cso';
//$dbpassword ='global33..';
//$dbname = 'globalmi_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>