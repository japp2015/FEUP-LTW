<?php
    include_once('database/connection.php');  
    session_start();
    
    $comment_id = $_GET['comment_id'];
    $post_id = $_GET['post_id'];
    
    SubtractScoreComment($comment_id);
    header('Location: single_post.php?id=' .$post_id);    
?>  