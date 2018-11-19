<?php 
include_once('database/connection.php');
session_start();

$id = $_GET['id'];
if (!isset($_GET['id']))
  die("No id!");

deletePost($id);
header('Location: main.php');
?>