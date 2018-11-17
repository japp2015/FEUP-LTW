<?php
    include_once('database/connection.php');    
    session_start();
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    
    if (!userExists($username)) {
        if (insertUser($username, $password, $email)) {
            $_SESSION['username'] = $username;
            header('Location: main.php');
        } else {
            $error = "Error creating user.";
            header('Location: signup.php?error=' . $error);
        }
    } else {
        $error = "User already exists.";
        header('Location: signup.php?error=' . $error);
    }

?>