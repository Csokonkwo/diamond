<?php 

function validateUser($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    if ($_POST['password_2'] !== $user['password'] ){
        array_push($errors, 'Passwords do not match');
    }

    $existingUser = selectOne('users', ['username' => $user['username']]);
    if($existingUser){
     array_push($errors, 'Username already exist');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
     array_push($errors, 'Email already exist');
    }

return $errors;
}


function validateLogin($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }


    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    return $errors;
}


function validateAdminUser($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    if ($_POST['password_2'] !== $user['password'] ){
        array_push($errors, 'Passwords do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
        if(isset($user['update_user']) && $existingUser['id'] != $user['id']){
            array_push($errors, 'Email already exists');
        }

        if(isset($user['create_admin'])){
            array_push($errors, 'Email already exists');
        }
    }

    $existingUser = selectOne('users', ['username' => $user['username']]);
    if($existingUser){
        if(isset($user['update_user']) && $existingUser['id'] != $user['id']){
            array_push($errors, 'Username already exists');
        }

        if(isset($user['create_admin'])){
            array_push($errors, 'Usernamealready exists');
        }
    }
    
return $errors;
}


?>