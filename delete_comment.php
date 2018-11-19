<?php 
include_once('database/connection.php');
session_start();

$id_comment = $_GET['id_comment'];
$id_post = $_GET['id_post'];

deleteComment($id_comment);
header('Location: single_post.php?id=' . $id_post);

?>