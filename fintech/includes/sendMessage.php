<?php

require "dbConnect.php";
    
if(isset($_POST)){
  $errors = array();

  if(empty($_POST['email'])){
    echo "Email is required ";
    exit;
  }

  if(empty($_POST['message'])){
    echo "Message is required ";
    exit;
  }

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
   
 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO messages (email, message) VALUES('$email', '$message');";
    $result = mysqli_query($conn, $query);
    
      if($result == true){
          echo "Message sent";
      }
      
      else{echo"Sending message failed";}
  	
  }
}


?>