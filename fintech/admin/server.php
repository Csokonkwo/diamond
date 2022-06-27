<?php

session_start();
include('../includes/dbFunctions.php');


if(!isset($_SESSION['id'])){
    header('location: ../register/signin.php');
    exit();
}

if($_SESSION['admin'] < 1){
    header('location: ../app/index.php');
    exit();
}

$userDetail = selectOne('users', ['id' => $_SESSION['id']]);
$_SESSION['id'] = $userDetail['id'];
$_SESSION['verified'] = $userDetail['verified'];
$_SESSION['referrer_id']= $userDetail['referrer_id'];


if($_SESSION['verified'] == 0){
    $_SESSION['message'] = "Please verify your Email";
    $_SESSION['alert-class'] = "alert-danger";

    header("location: ../app/unverified.php");

    exit();
}

if(isset($_GET['Complet'])){

    $status = 'Completed';
    $t_id = $_GET['t_id'];
    update('transactions', $t_id, ['status'=> $status]);

    $amountt = $_GET['amount'] * 1.2;
    $_POST['amount'] = $amountt;
    $_POST['user_idd'] = $_GET['interest'];
    $_POST['status'] = 'Paid';
    $_POST['type'] = 'Interest';
    $_POST['transAdd'] = 'Nil';

    $payInterest = createUser('transactions', $_POST);

    $_NOTI['user_idd'] = $_GET['interest'];
    $_NOTI['message'] = 'Interest paid for ($'.$_GET['amount']. ') Investment';

    $sendNotification = createUser('notification', $_NOTI);

}

$id = '';
$title = '';
$body = '';
$errors = array();



if(isset($_POST['add_post'])){

    if (empty($_POST['title'])){
        array_push($errors, 'Title is required');
    }

    if (empty($_POST['body'])){
        array_push($errors, 'Body is required');
    }
    
    if(!empty($_FILES['image']['name'])){
        $image_name = time(). "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/app/img/" .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] = $image_name;
        }
        else{
            array_push($errors, 'Image is required');
        }
    }

    else{
        array_push($errors, 'Image upload failed');
    }

    if(count($errors)==0){
        unset($_POST['add_post']);
        $_POST['user_id'] = $_SESSION['username'];
        $_POST['published'] = 0;
        $_POST['body'] = htmlentities($_POST['body']); 
        
        $user_id = $_POST['user_id'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $image = $_POST['image'];
        $published = $_POST['published']; 

        //createUser('posts', $_POST);
        $sql = "INSERT INTO posts (user_idd, title, body, images, published) 
        VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssi', $user_id, $title, $body, $image, $published);
        
        if($stmt->execute()){
            header('location: index.php');
            exit();
        }

        else{
            echo mysqli_error($conn);
            die();
        }
       
    }

    else{
        $title = $_POST['title'];
        $body = $_POST['body'];
    }

}


//gets and update posts
if(isset($_POST['update_post'])){

    if(!empty($_FILES['image']['name'])){
        $image_name = time(). "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/app/img/" .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['images'] = $image_name;
        }
        else{
            array_push($errors, 'Failed to upload image');
        }
    }

    if(count($errors) == 0){
        $id = $_POST['id']; 
        unset($_POST['update_post'], $_POST['id']);
        $_POST['user_idd'] = $_SESSION['id'];
        $_POST['published'] = 0;
        $_POST['body'] = htmlentities($_POST['body']);
        
        $post_id = update('posts', $id, $_POST);
        
        header('location: index.php ');
    }

    else{
        $title = $_POST['title'];
        $body = $_POST['body'];
    }
    
}


?>