<?php
    include_once('database/connection.php');  
    session_start();
    
    $value=$_GET['value'];
    $id=$_GET['id'];
    $username= $_SESSION['username'];
    $username_id= $username . "_" . $id;
    
    post_vote($username_id, $id, $value);
    $post_score=GetPostScore($id)[0];
    UpdateScore($post_score, $id);
    $user_score=GetAllUserScore($username);
    UpdateScoreUser($user_score, $username);

    header('Location: single_post.php?id=' . $_GET['id']);    
?> 