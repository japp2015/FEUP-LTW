<?php
    include_once('database/connection.php');  
    session_start();

    $id = $_GET['id'];
    SubtractScore($id);
    header('Location: single_post.php?id=' . $id);

?>  