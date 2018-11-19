<?php
include_once('database/connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <header id="topBar">
        <h1>Reddit</h1>
        <?php if (!isset($_SESSION['username'])) { ?>
        <nav id="menu">
            <ul>
                <li> <button type="button" onclick="location.href='login.php';">LOGIN</button> </li>
                <li> <button type="button" onclick="location.href='signup.php';">SIGN UP</button> </li>
            </ul>
        </nav>
        <?php } else { ?>
        <nav id="menu">
            <ul>
                <li> <button type="button" onclick="location.href='logout.php';">LOGOUT</button> </li>
                <li> <button type="button" onclick="location.href='edit_profile.php';">EDIT PROFILE</button> </li>
            </ul>
        </nav>
        <?php } ?>
    </header>

    <?php
        if (isset($_GET['error'])) {
            echo "<p>" . $error = $_GET['error'] . "</p>";} 
        if (!isset($_SESSION["username"])){
    ?>
    <p>You must <a href='login.php'>login</a></p>
    <p>Not registered? <a href="signup.php">Create an account.</a></p>
    <?php
    }
    else{
        $username=$_SESSION["username"];
        ?>
    <section id="add post">
        <form action="action_post.php" method="post">
            <h3> Create and share content with the community. <h3>
                    <div> <input type="text" placeholder="Title" name="Title"> </div>
                    <div> <input type="text" placeholder="Text" name="Post"> </div>
                    <div> <input type="submit" value="Upload"> </div>
        </form>
    </section>
    <?php 
    }
    ?>

    <footer>
        <p>&copy; 2018 Reddit</p>
    </footer>

</body>

</html>