<?php

if(!isset($_SESSION['id'])){
    header ('Location:' . BASE_URL); 
}

if($_SESSION['admin'] == 1){
    echo "You ain't allowed";
    header ('Location:' . BASE_URL . '/blog/admin/index.php');
    exit();
}

if($_SESSION['admin'] < 2){
    echo "You ain't allowed";
    header ('Location:' . BASE_URL . '/blog/index.php');
    exit();
}

?>