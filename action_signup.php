<?php
    include_once('database/connection.php');    
    session_start();
    
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirmed_password = htmlspecialchars($_POST['confirmed_password']);
    
    if ($password == $confirmed_password) {
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
    } else {
        $error = "Passwords don't match.";
        header('Location: signup.php?error=' . $error);
    }

?>