<?php
    include_once('database/connection.php');  
    session_start();
    
    $value=$_GET['value'];
    $comment_id = $_GET['comment_id'];
    $post_id = $_GET['post_id'];
    $username= $_SESSION['username'];
    $username_id= $username . "_" . $comment_id;
    comment_vote($username_id, $comment_id, $value);
    $comment_score=GetCommentScore($comment_id)[0];
    UpdateScoreComment($comment_score, $comment_id);
    $user_score=GetAllUserScore($username);
    UpdateScoreUser($user_score, $username);
    header('Location: single_post.php?id=' . $post_id);    
?> 