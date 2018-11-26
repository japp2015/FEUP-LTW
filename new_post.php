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
    <link href="css/posts.css" rel="stylesheet">
</head>

<body>

    <?php include_once('common/header.php'); ?>

    <section class = "add_post">
        <form action="action_post.php" method="post">
            <h3> Create and share content with the community. <h3>
            <div><input type="text" placeholder="Title" name="Title" required></div>
            <div><textarea rows="4" cols="50" placeholder="Text (optional)" name="Post"></textarea></div>
            <div><input type="submit" value="Upload"></div>
        </form>
    </section>

    <?php include_once('common/footer.php'); ?>

</body>

</html>