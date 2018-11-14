<?php include_once('database/connection.php');

# Query returning all news in the database:
$query = $db->prepare('SELECT * FROM post');
$query->execute();
$posts = $query->fetch(); ?>

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>

    <header id="topBar">
      <h2>Reddit</h2>
      <a href="login.php">Login</a>
    </header>

    <section id="post">
      <?php
      foreach($posts as $post) {
      ?>
      <article>
        <?php 
        echo '<h3>' . $post['title'] . '</h3>';
        echo '<p>' . $post['fulltext'] . '</p>'; 
        ?>
        <footer>
          <span id="username"><?php echo '<p> Posted by' . $post['username'] . '</p>';?></span>
        </footer>
      </article>
      <?php } ?>
    </section>

  </body>

  <footer>
    <p>&copy; 2018 Reddit</p>
  </footer>
  
</html>