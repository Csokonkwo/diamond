<?php

function executeQuery($sql, $data){

    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
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


?>