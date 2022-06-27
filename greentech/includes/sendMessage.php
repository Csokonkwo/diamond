<?php

require "database.php";
    
if(isset($_POST)){
  if(empty($_POST['email'] && $_POST['message'])){
    echo "Both fields are required";
    exit;
  }

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
   
 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO messages (email, message) VALUES('$email', '$message');";
  	$result = mysqli_query($db, $query);
      if($result == true){
          echo "Message sent";
      }
      
      else{echo"Sending message failed";}
  	
  }
}


?>