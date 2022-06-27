<?php

$hostname = 'localhost';
$dbuser = 'coinmmeo_cso';
$dbpassword ='drunkman';
$dbname = 'coinmmeo_diamond';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>