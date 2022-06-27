<?php 
include("includes/dbFunctions.php");
include("register/mailer.php");

//get last date from database in y-d-m format
$todayDate = date("Y-m-d");

sendInterestEmail('mikereddy767@gmail.com', 'Mike', 'Beginner', 20, date("Y-m-d H:i:s (e)"));