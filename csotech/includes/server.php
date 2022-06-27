<?php 

require "dbFunctions.php";

if (isset($_POST['news_submit'])) {

    unset($_POST['news_submit']);
    if(empty($_POST['email'])){
        $errors['email'] = "Email required";
        echo "Email is required ";
        exit;
    }
 
    $user = selectOne('newsletters', ['email' => $_POST['email']]);
  
    if ($user['email'] === $_POST['email']) {
        $errors['email'] = "Email already subscribed";
        echo('Email already subscribed');
    }

    if (count($errors) == 0) {
        $sendEmail = createUser('newsletters', $_POST);
        echo "Subscribed Successfully";
    }  
    
}


if(isset($_POST['messages_submit'])){

    unset($_POST['messages_submit']);

    if(empty($_POST['email'] && $_POST['message'])){
        $errors['email'] = "Email required";
        echo "Both fields are required";
        exit;
    }

    if(count($errors) == 0) {
        $sendMessage = createUser('messages', $_POST);
        echo ('Message sent');
    }
    
}

if(isset($_POST['orders_submit'])){

    unset($_POST['orders_submit']);

    if(empty($_POST['email'] && $_POST['type'])){
        $errors['email'] = "Email required";
        echo "Please fill the form";
        exit;
    }

    if (count($errors) == 0) {

    $sendOrder = createUser('orders', $_POST);
        echo ("Order Sent");
        
    }

}

