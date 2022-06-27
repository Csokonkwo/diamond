<?php 

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

?>