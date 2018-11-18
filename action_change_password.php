<?php
    include_once('database/connection.php');    
    session_start();
    
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirmed_password = $_POST['confirmed_password'];

    /* Change password */
    if ($old_password == $password) {
        if ($new_password == $password ) {
            $error = "Please insert new password.";
            header('Location: edit_profile.php?error=' . $error);            
        } elseif (($new_password != $password) && ($new_password == $confirmed_password)) {
            if (changePassword($new_password, $username)) {
                $_SESSION['password'] = $new_password;
                header('Location: main.php');
            } else {
                $error = "Failed to change password.";
                header('Location: edit_profile.php?error=' . $error);
            }
        } else {
            $error = "Passwords don't match.";
            header('Location: edit_profile.php?error=' . $error); 
        }
    } else {
        $error = "Password is incorrect.";
        header('Location: edit_profile.php?error=' . $error);    
    }  
    
?>