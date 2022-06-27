<?php 
require "dbFunctions.php";

if (isset($_POST['news_submit'])) {

  if(empty($_POST['email'])){
    echo "Email is required ";
    exit;
  }
 
  $email = mysqli_real_escape_string($conn, $_POST['email']);
    
  $user_check_query = "SELECT * FROM news WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    $errors = array();
  
    if ($user['email'] === $email) {
     array_push($errors, "Email already subscribed");
    foreach($errors as $message) {
        echo $message;
    }
    }
  
  if (count($errors) == 0) {

  	$query = "INSERT INTO news (email) 
  			  VALUES('$email')";
  	mysqli_query($conn, $query);
      
      echo "Subscribed Successfully";
  }  
    
}


else{
    echo "Not allowed";
}
