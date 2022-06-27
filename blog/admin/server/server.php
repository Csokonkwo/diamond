<?Php

if(!isset($_SESSION['id'])){
    header("location: register/signin.php");
    exit();
}

if($_SESSION['admin'] <= 1){
    header("location: ../index.php");
    exit();
}

?> 