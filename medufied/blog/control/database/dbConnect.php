<?php

$hostname = "localhost";
$dbname = "blog";
$dbusername = "root";
$dbpassword = "";

$conn = new Mysqli($hostname, $dbusername, $dbpassword, $dbname);

/*if($conn->connect_error){
    die('database cant connect: '.$conn->connect_error);
}

else{
    echo"connected";
}*/

?>