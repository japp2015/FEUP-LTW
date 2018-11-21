<?php
    include_once('database/connection.php');    
    session_start();
    
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $new_name = $_POST['fullname'];
    $new_email = $_POST['email']; 

    if (empty($new_email) && empty($new_name)) {
        $error = "Please fill a field.";
        header('Location: edit_profile.php?error=' . $error);
    }

    /* Change email */
    if (!empty($new_email)) {
        if (emailExists($new_email, $username)) {
            $error = "Please insert new email.";
            header('Location: edit_profile.php?error=' . $error);
        } else {
            if (changeEmail($new_email, $username)) {
                header('Location: main.php');
            } else {
                $error = "Failed to change email.";
                header('Location: edit_profile.php?error=' . $error);
            }
        }
    }

    /* Change full name */
    if (!empty($new_name)) {
        if (changeName($new_name, $username)) {
            header('Location: main.php');
        } else {
            $error = "Failed to change name.";
            header('Location: edit_profile.php?error=' . $error);
        }
    }

?>