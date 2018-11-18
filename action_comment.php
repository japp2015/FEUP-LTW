<?php
    include_once('database/connection.php');  
    session_start();

    $post_id = $_GET['id'];
    $username=$_SESSION["username"];
    $text=$_POST['Comment'];
    if (isset($username))
    {
        insertComment($post_id, $username, $text);
        header('Location: single_post.php?id='.$post_id);
    }else {
        $error = "You must Login";
        header('Location: single_post.php?id='.$post_id .'&error=' .$error);
    }
?>