<?php
    include_once('database/connection.php');    
    session_start();
    
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST['email']);
    
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ? ');
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['username'] = $username;
        header('Location: main.php');
    } else {
        header('Location: login.php');
    }

?>