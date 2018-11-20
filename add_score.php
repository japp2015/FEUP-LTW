<?php
    include_once('database/connection.php');  
    session_start();

    
    $id = $_GET['id'];
    AddScore($id);
    header('Location: single_post.php?id=' . $id);    
?>  