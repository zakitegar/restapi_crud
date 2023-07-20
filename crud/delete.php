<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id'];

    $query  = "DELETE FROM notes WHERE id ='$id' ";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('massage' => 'Deleted'));
    } else {
        echo json_encode ( array('massage' => 'Error')); 
    }

?>