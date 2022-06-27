<?Php

include(ROOT_PATH .'/includes/dbFunctions.php');

if(!isset($_SESSION['id'])){
    header("location: ". BASE_URL . "/register/signin.php");
    exit();
}

if($_SESSION['admin'] <= 1){
    header("location: ../index.php");
    exit();
}




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

//gets the topic and its relation
$topics = selectAll('topics');
$posts = selectAll('posts');

$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';
$name = '';
$description = '';

$goPostIndex = 'index.php';


//adds post
if(isset($_POST['add_post'])){
    $errors = validatePost($_POST);

    if(count($errors)==0){

        if(!empty($_FILES['image']['name'])){
            $image_name = time(). "_" . $_FILES['image']['name'];
            $destination = "img/img/" .$image_name;
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
            $_POST['top'] = 0;
            $_POST['bottom'] = 0;
            $post_id = createUser('posts', $_POST);
            $_SESSION['message'] = 'Post created successfully';
            $_SESSION['type'] = 'success';
            header('location: '. $goPostIndex);
        }
    
        else{
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }

    }

}


//gets and update posts
if(isset($_POST['update_post'])){

    if (empty($_POST['title'])){
        array_push($errors, 'Title is required');
    }

    if (empty($_POST['body'])){
        array_push($errors, 'Body is required');
    }

    if (empty($_POST['topic_id'])){
        array_push($errors, 'Please select a topic');
    }

    $existingPost = selectOne('posts', ['title' => ($_POST['title'])]);
    if($existingPost){
        if(isset($_POST['update_post']) && $existingPost['id'] != $_POST['id']){
            array_push($errors, 'Post with this title already exists');
        }
        
    }

    if(count($errors) == 0){

        if(!empty($_FILES['image']['name'])){
            $image_name = time(). "_" . $_FILES['image']['name'];
            $destination = "img/img/" .$image_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    
            if($result){
                $_POST['image'] = $image_name;
            }
            else{
                array_push($errors, 'Failed to upload image');
            }
        }
    
        if(empty($_FILES['image']['name'])){
            unset($_POST['image']);
        }
    
        if(count($errors) == 0){
            $id = $_POST['id'];
            unset($_POST['update_post'], $_POST['id']);
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
            $_POST['body'] = htmlentities($_POST['body']);
    
            $post_id = update('posts', $id, $_POST);
            $_SESSION['message'] = 'Post updated successfully';
            $_SESSION['type'] = 'success';
            header('location: '. $goPostIndex);
        }
    
        else{
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }
    } 
    
}




//Codes for topic starts here

function validateTopic($topics){
    $errors = array();

    if (empty($topics['name'])){
        array_push($errors, 'Name is required');
    }

    $existingTopic = selectOne('topics', ['name' => $topics['name']]);
    if($existingTopic){
        if(isset($_POST['update_topic']) && $existingTopic['id'] != $_POST['id']){
            array_push($errors, 'Topic with this Name already exists');
        }

        if(isset($_POST['add_topic'])){
            array_push($errors, 'Topic with this Name already exists');
        }
    }

return $errors;
}


$goTopicIndex = 'topics.php';

if(isset($_POST['add_topic'])){
    $errors = validateTopic($_POST);

    if(count($errors)===0){
       
        unset($_POST['add_topic']);
        $topic_id = createUser('topics', $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION['type'] = 'success';
        header('location: '. $goTopicIndex);
        exit();
    }

    else{    
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


if(isset($_POST['update_topic'])){
    $errors = validateTopic($_POST);

    if(count($errors)===0){
        $id = $_POST['id'];
        unset($_POST['id'], $_POST['update_topic']);
        $topic_id = update('topics', $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
        $_SESSION['type'] = 'success';
        header('location: '. $goTopicIndex);
        exit();
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

?> 