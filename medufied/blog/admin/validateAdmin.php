<?php

if(!isset($_SESSION['id'])){
    header ('Location:' . BASE_URL); 
 }

 elseif($_SESSION['admin'] != (2 || 1)){

 //echo "You ain't allowed";
 header ('Location:' . BASE_URL . '/logout.php'); 
 
 exit();
 }
 

?>