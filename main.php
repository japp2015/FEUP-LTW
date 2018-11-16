<?php include_once('database/connection.php');

# Query returning all news in the database:
$query = $db->prepare('SELECT * FROM post');
$query->execute();
$posts = $query->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>

    <header id="topBar">
      <h2>Reddit</h2>
      <button type="button" onclick="location.href='login.php';">LOGIN</button>
      <button type="button" onclick="location.href='signup.php';">SIGN UP</button>
    </header>

    <section id="post">
      <?php foreach($posts as $post) { ?>
      <article> <a  href="single_post.php?id=<?=$post['id']?>";>
      <?php echo "<h3>" . $post['title'] . "</h3>";?> 
      </a>
      <?php echo "<p>" . $post['fulltext'] . "</p>"; ?>
      </a>
      <?php echo "<p>" . $post['username'] . "</p>"; ?>
      </article>

      <? } ?>
    </section>

  </body>

  <footer>
    <p>&copy; 2018 Reddit</p>
  </footer>
  
</html>