<?php

// $hostname = 'localhost';
// $dbuser = 'tescofin_cso';
// $dbpassword ='transport1..';
// $dbname = 'tescofin_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>