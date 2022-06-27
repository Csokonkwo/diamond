<?php

// $hostname = 'localhost';
// $dbuser = 'tescocap_cso';
// $dbpassword ='tessy23y';
// $dbname = 'tescocap_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>