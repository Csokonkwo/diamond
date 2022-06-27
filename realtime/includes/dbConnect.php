<?php

// $hostname = 'localhost';
// $dbuser = 'realtime_main';
// $dbpassword ='scantynation';
// $dbname = 'realtime_main';

$hostname = 'localhost';
$dbuser = 'root';
$dbpassword ='';
$dbname = 'general';

$conn = new mysqli($hostname, $dbuser, $dbpassword, $dbname);

if($conn->connect_error){
    die('Database error: ' . $conn->error);
}

?>