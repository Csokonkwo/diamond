<?php
session_start();

require('dbConnect.php');

function dd($value){
    echo "<pre>". print_r($value, true). "</pre>";
    die();
}

function executeQuery($sql, $data){

    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = []){

    global $conn;

    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $sql = $sql. " ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else{
        $i = 0;

        foreach($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql." WHERE $key=?";
            }
            else{
                $sql = $sql." AND $key=?";
            }
            $i++;
        }
        $sql = $sql. " ORDER BY id DESC";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectComment($table, $limit, $conditions = []){

    global $conn;

    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $sql = $sql. " ORDER BY id DESC Limit $limit";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else{
        $i = 0;

        foreach($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql." WHERE $key=?";
            }
            else{
                $sql = $sql." AND $key=?";
            }
            $i++;
        }
        $sql = $sql. " ORDER BY id DESC Limit $limit";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectOne($table, $conditions){

    global $conn;

    $sql = "SELECT * FROM $table";

        $i = 0;

    foreach($conditions as $key => $value){
        if ($i === 0){
            $sql = $sql." WHERE $key=?";
        }
        else{
            $sql = $sql." AND $key=?";
        }
        $i++;
    }

    $sql = $sql. " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}



function createUser($table, $data){

    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i = 0;

    foreach($data as $key => $value){
        if ($i === 0){
            $sql = $sql. "  $key=?";
        }
        else{
            $sql = $sql. ",  $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


function update($table, $id, $data){

    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;

    foreach($data as $key => $value){
        if ($i === 0){
            $sql = $sql. "  $key=?";
        }
        else{
            $sql = $sql. ",  $key=?";
        }
        $i++;
    }

    $sql = $sql. " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}


function delete($table, $id){

    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}


function getPublishedPosts(){

    global $conn;
    global $page;

    if($page<1){
        $startPoint = 0;
    }
    else{$startPoint = ($page*3)-3;}

    $sql = "SELECT p.*, u.username from posts as p join users as u on p.user_id =u.id where p.published=? ORDER BY id DESC LIMIT $startPoint,9";
    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function selectSpecial($column, $limit){

    global $conn;
    $sql = "SELECT p.*, u.username from posts as p join users as u on p.user_id =u.id where p.published=? AND $column =1 ORDER BY id DESC LIMIT $limit";
    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getPostsByTopic($topic_id){

    global $conn;
    $sql = "SELECT p.*, u.username from posts as p join users as u on p.user_id =u.id where p.published=? AND topic_id=? ORDER BY id DESC LIMIT 40";
    $stmt = executeQuery($sql, ['published' => 1, $topic_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function searchPosts($term){
    $term . '%';

    $match = '%' . $term . '%';

    global $conn;
    $sql = "SELECT p.*, u.username 
    FROM posts as p 
    JOIN users as u on p.user_id =u.id 
    WHERE p.published=? 
    AND p.title LIKE ? OR p.body like ? ORDER BY id DESC LIMIT 40";

    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body'=> $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function calculateAll($table, $post_id){
//calculate comments
    global $conn;

    $sql = "SELECT * FROM $table where post_id = '$post_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $records = mysqli_num_rows($result);
    }
    return $records;
    
}