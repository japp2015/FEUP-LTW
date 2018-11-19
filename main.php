<?php include_once('database/connection.php');
session_start();

# Query returning all news in the database:
$query = $db->prepare('SELECT * FROM post');
$query->execute();
$posts = $query->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
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

    <div class="container">

        <section id="create_post">
            <p> Create and share content with the community. </p>
            <div class="button">
                <button type="button" onclick="location.href='new_post.php';">CREATE POST</button>
            </div>
        </section>

        <?php foreach($posts as $post) { ?>
        <section id="post">

            <article>
                <a href="single_post.php?id=<?=$post['id']?>" ;>
                    <?php echo "<h3>" . $post['title'] . "</h3>";?></a>
                <?php echo "<p>" . $post['fulltext'] . "</p>"; ?>
                <footer>
                    <?php echo "<p> Posted by " . $post['username'] . "</p>"; ?>
                </footer>
            </article>

        </section>
        <? } ?>

    </div>

    <footer>
        <p>&copy; 2018 Reddit</p>
    </footer>

</body>

</html>