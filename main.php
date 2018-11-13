<?php include_once('database/connection.php');

# Query returning all news in the database:
$stmt = $db->prepare('SELECT * FROM post');
$stmt->execute();
$posts = $stmt->fetch(); ?>

<!DOCTYPE html>
<html lang="en-US">

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <header id="topBar">
        <h2>Reddit</h2>
        <button id="logInBtn" class="button"> Log In </button>

        <div id="logIn" class="logInWindow">
            <div class="logInForm">
                <span class="closeBtn"> &times; </span>
                <h3>Log In</h3>
                <form>

                </form>
            </div>
        </div>
        <script src="main.js"></script>
    </header>

    <section id="post">
      <?php
      foreach($posts as $post) {
      ?>
      <article>
        <?php echo '<h1>' . $post['title'] . '</h1>';
        echo '<p>' . $article['fulltext'] . '</p>'; ?>
        <footer>
          <span id="username"><?php echo '<p> Posted by' . $post['username'] . '</p>';?></span>
        </footer>
      </article>
    </section>
  </body>

  <footer>
    <p>&copy; Reddit, 2018</p>
  </footer>

</html>