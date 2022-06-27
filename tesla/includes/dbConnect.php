<?php

// $hostname = 'localhost';
// $dbuser = 'teslagro_cso';
// $dbpassword ='teslaworld';
// $dbname = 'teslagro_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>