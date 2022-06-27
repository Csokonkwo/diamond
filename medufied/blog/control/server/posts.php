<?php

include(ROOT_PATH . "/blog/control/database/dbFunctions.php");
include(ROOT_PATH . "/blog/control/server/validatePost.php");

$table = 'posts';

//gets the topic and its relation
$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

$goPostIndex = '/blog/admin/posts/index.php';

//adds post
if(isset($_POST['add_post'])){
    $errors = validatePost($_POST);

    if(!empty($_FILES['image']['name'])){
        $image_name = time(). "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/blog/img/" .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] = $image_name;
        }
        else{
            array_push($errors, 'Failed to upload image');
        }
    }

    else{
        array_push($errors, "Post Image required");
    }

    if(count($errors)==0){
        unset($_POST['add_post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = createUser($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';
        $_SESSION['type'] = 'success';
        header('location: '. BASE_URL . $goPostIndex);
    }

    else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

//gets auto fill edit form
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $post = selectOne($table, ['id' => $id]);
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
    
}

//gets and update posts
if(isset($_POST['update_post'])){
    $errors = validatePost($_POST);

    if(!empty($_FILES['image']['name'])){
        $image_name = time(). "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/blog/img/" .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] = $image_name;
        }
        else{
            array_push($errors, 'Failed to upload image');
        }
    }

    else{
        array_push($errors, "Post Image required");
    }

    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update_post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post updated successfully';
        $_SESSION['type'] = 'success';
        header('location: '. BASE_URL . $goPostIndex);
    }

    else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

    
}


//delete post
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Post deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . $goPostIndex);
    exit();
}

//published and unpublished
if(isset($_GET['published']) && isset($_GET['p_id'])){
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    //..... update published
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Post published state changed';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . $goPostIndex);
    exit();

}
