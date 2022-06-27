<?php

// initializing variables
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "blog";
$errors = array(); 

// connect to the database
$db = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

