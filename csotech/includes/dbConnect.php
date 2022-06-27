<?php

// initializing variables
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "csoblog";

// $servername = "localhost";
// $dbusername = "csotechc_cso";
// $dbpassword = "htpklc1biz";
// $dbname = "csotechc_csotech";

$errors = array(); 

// connect to the database
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

