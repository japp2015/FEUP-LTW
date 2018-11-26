<?php include_once('database/connection.php');
session_start();

# Query returning all news in the database:
$query = $db->prepare('SELECT * FROM post ORDER BY id DESC');
$query->execute();
$posts = $query->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reddit</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <script src="must_login.js" defer></script>
</head>

<body>

    <?php include_once('header.php'); ?>

    <div class="container">

        <section id="create_post">
            <p>Create and share content with the community.</p>
            <div class="button">
                <?php if (!isset($_SESSION["username"])){?>
                    <button type="button" onclick="must_login()">CREATE POST</button>
                <?php } else { ?>
                    <button type="button" onclick="location.href='new_post.php';">CREATE POST</button>
                <?php } ?>
            </div>
        </section>

        <?php foreach($posts as $post) { ?>
        <section>
            <article id="post">
                <a href="single_post.php?id=<?=$post['id']?>" ;><?php echo "<h3>" . $post['title'] . "</h3>";?></a>
                <?php echo "<p>" . $post['fulltext'] . "</p>"; ?>
                <footer>
                    <?php echo "<p> Posted by <a href='view_profile.php?username=". $post['username'] ."'>" . $post['username'] . "</a></p>"; ?>                
                </footer>
            </article>

        </section>
        <? } ?>
        
    </div>

    <?php include_once('footer.php'); ?>

</body>

</html>