<?php

// $hostname = 'localhost';
// $dbuser = 'amcorass_cso';
// $dbpassword ='amcortake';
// $dbname = 'amcorass_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>