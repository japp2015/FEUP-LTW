<?php
    include_once('database/connection.php');  
    session_start();

    $username=$_SESSION["username"];
    $post_id = $_GET['id'];
    $text=$_POST['Comment'];

    insertComment($post_id, $username, $text);
    header('Location: single_post.php?id=' . $post_id);
?>