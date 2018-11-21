<?php
include_once('database/connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reddit</title>
    <link href="css/style.css" rel="stylesheet">    
    <link href="css/layout.css" rel="stylesheet">
</head>

<body>

    <?php include_once('header.php'); ?>

    <?php
        if (isset($_GET['error'])) {
            echo "<p>" . $error = $_GET['error'] . "</p>";
        } else {
            $username=$_SESSION["username"];
        }
    ?>

    <section id="add post">
        <form action="action_post.php" method="post">
            <h3> Create and share content with the community. <h3>
            <div> <input type="text" placeholder="Title" name="Title"> </div>
            <div> <input type="text" placeholder="Text" name="Post"> </div>
            <div> <input type="submit" value="Upload"> </div>
        </form>
    </section>

    <?php include_once('footer.php'); ?>

</body>

</html>