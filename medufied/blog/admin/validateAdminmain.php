<?php

if(!isset($_SESSION['id'])){
    header ('Location:' . BASE_URL); 
 }

elseif($_SESSION['admin'] != 2 ){

 header ('Location:' . BASE_URL . '/blog/logout.php'); 
 
 exit();
 }
 

?>