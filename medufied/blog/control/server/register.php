<?php 
include(ROOT_PATH . "/blog/control/database/dbFunctions.php");
include(ROOT_PATH . "/blog/control/server/validateUser.php");

$table = 'users';
$admin_users = selectAll($table, ['admin' => 1]);

$errors = array();
$username = "";
$email = "";
$password = "";
$password_2 = ""; 
$admin = '';
$id = '';

$goUserIndex = '/blog/admin/users/index.php';

function loginUser($user){

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'User created successfully';
    $_SESSION['type'] = 'success';

    if($_SESSION['admin']){
        header('location:' .BASE_URL . '/admin/index.php');
    }
    else{
        header('location:' .BASE_URL . '/index.php');
    }
    exit();

}

//register users with functions already created

if(isset($_POST['create_admin'])){
    $errors = validateUser($_POST);

    if(count($errors)===0){
        unset($_POST['create_admin'], $_POST['password_2']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(!empty($_POST['admin'])){
            $_POST['admin'] = 1;
            $user_id = createUser($table, $_POST);
            $_SESSION['message'] = 'Admin user created successfully';
            $_SESSION['type'] = 'success';
            header('location:' .BASE_URL . $goUserIndex);
            exit();
        }
        else{
            $_POST['admin'] = 0;
            $user_id = createUser($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    }

    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }

}

//delete user
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Admin user deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . $goUserIndex);
    exit();
}


// edit user
if(isset($_GET['id'])){
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    $admin = isset($user['admin']) ? 1 : 0;
}


// Update user via admin page
if(isset($_POST['update_user'])){
    $errors = validateAdminUser($_POST);

    if(count($errors)===0){
        $id = $_POST['id'];
        unset($_POST['update_user'], $_POST['password_2'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = 'Admin user updated successfully';
        $_SESSION['type'] = 'success';
        header('location:' .BASE_URL . $goUserIndex);
        exit();
    }

    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
}

?>