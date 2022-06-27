<?php 

include("dbFunctions.php");

$errors = array();

if(isset($_POST['comment_submit'])){
    $error = array();
    unset($_POST['comment_submit']);

    if(empty($_POST['comment'])){
        $errors['comment'] = "comment required";
        echo('Comment required ');
    }

    if(empty($_POST['username'])){
        $errors['username'] = "Username required";
        echo('Username required');
    }

    if (count($errors) === 0){
        $_POST['published'] = 1;
        $sendComment = createUser('comments', $_POST);
        if($sendComment){
            echo("Comment Sent");
        }

        else{"Sending Comment failed";}
    }
    
}

if(isset($_POST['news_submit'])){
    $error = array();
    unset($_POST['news_submit']);

    if(empty($_POST['email'])){
        $errors['email'] = "Email required";
        echo('Email required');
    }
    
    $user = selectOne('newsletters', ['email' => $_POST['email']]);
  
    if ($user['email'] === $_POST['email']) {
        $errors['email'] = "Email already subscribed";
        echo('Email already subscribed');
    }

    if (count($errors) === 0){
        $sendEmail = createUser('newsletters', $_POST);
        if($sendEmail){
            echo("Email Subcription Successful");
        }

        else{"Email Subcription Failed";}
    }
    
}

?>