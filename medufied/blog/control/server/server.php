<?php 

include(ROOT_PATH . "/blog/control/database/dbFunctions.php");
include(ROOT_PATH . "/blog/control/server/validateUser.php");

$errors = array();
$username = "";
$email = "";
$password = "";
$password_2 = "";
$table = 'users';

function loginUser($user){

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if($_SESSION['admin'] == 1 || $_SESSION['admin'] == 2){
        header('location:' .BASE_URL . '/blog/admin/dashboard.php');
    }
    else{
        header('location:' .BASE_URL . '/blog/index.php');
    }
    exit();

}

//register users with functions already created

if(isset($_POST['reg_btn'])){
    $errors = validateUser($_POST);

    if(count($errors)===0){
        unset($_POST['reg_btn'], $_POST['password_2']);
        $_POST['admin'] = 0;

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = createUser($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

        //login users 
        loginUser($user);
    }

    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2'];
    }

}


if(isset($_POST['login_btn'])){

    $errors = validateLogin($_POST);

    if(count($errors)===0){

        $user = selectOne($table, ['username' => $_POST['username']]);

        if($user && password_verify($_POST['password'], $user['password'])){

        //login users 
        loginUser($user);
        }

        else{
            array_push($errors, 'Wrong user details');
        }

    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}


?>
