<?php
    include_once('database/connection.php');    
    session_start();
    
    $username = $_SESSION['username'];
    deleteUser($username);
    
    header('Location: logout.php');
?>