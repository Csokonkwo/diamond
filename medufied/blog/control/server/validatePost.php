<?php 

function validatePost($post){
    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'Title is required');
    }

    if (empty($post['body'])){
        array_push($errors, 'Body is required');
    }

    if (empty($post['topic_id'])){
        array_push($errors, 'Please select a topic');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if($existingPost){
        if(isset($_POST['update_post']) && $existingPost['id'] != $_POST['id']){
            array_push($errors, 'Post with this title already exists');
        }

        if(isset($_POST['add_post'])){
            array_push($errors, 'Post with title already exists');
        }
        
    }

    return $errors;
}


?>