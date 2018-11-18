<?php
    include_once('database/connection.php');  
    session_start();

    $username=$_SESSION["username"];
    $title=$_POST["Title"];
    $fulltext=$_POST['Post'];

    if ($title=="" or $fulltext=="")
    {
        $error="Fill out all fields";
        header('Location: new_post.php?error=' .$error);
    } else {
        insertPost($username, $title, $fulltext);
        header('Location: main.php');
    }
?>  