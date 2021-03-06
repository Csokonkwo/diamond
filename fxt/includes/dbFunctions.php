<?php
session_start();
require 'dbConnect.php';

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



function selectStaz($table, $conditions = []){

    global $conn;

    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $sql = $sql. " ORDER BY id DESC LIMIT 5";
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
        $sql = $sql. " ORDER BY id DESC LIMIT 5";
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


function calculateTotal($id, $type, $status){

    global $conn;

    $sql = "SELECT amount FROM transactions WHERE user_idd = '$id' AND type = '$type' AND status = '$status' ";
    $results = mysqli_query($conn, $sql);
    $total = 0;
    while($row = mysqli_fetch_assoc($results)){
        $total += $row['amount'];

    }

    return $total;
}

function calculateTotal2($id, $type){

    global $conn;

    $sql = "SELECT amount FROM transactions WHERE user_idd = '$id' AND type = '$type' AND status != 'Cancelled'";
    $results = mysqli_query($conn, $sql);
    $total = 0;
    while($row = mysqli_fetch_assoc($results)){
        $total += $row['amount'];

    }

    return $total;
}

function checkRows($id, $type, $status){

    global $conn;

    $sql = "SELECT * FROM transactions WHERE user_idd = '$id' AND type = '$type' AND status = '$status'";
    $results = mysqli_query($conn, $sql);
    $rowNumbers = mysqli_num_rows($results);
    return $rowNumbers;
}

function checkRefRows($table, $user){

    global $conn;

    $sql = "SELECT * FROM $table WHERE referrer_id = '$user'";
    $results = mysqli_query($conn, $sql);
    $rowNumbers = mysqli_num_rows($results);
    return $rowNumbers;
}


?>