<?php

    require_once('helper.php');

    $note = $_POST['note'];

    $query  = "INSERT INTO notes(note) VALUES ('$note')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('massage' => 'Created'));
    } else {
        echo json_encode ( array('massage' => 'Error')); 
    }

?>