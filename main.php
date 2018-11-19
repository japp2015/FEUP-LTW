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
  </head>

  <body>

    <header id="topBar">
      <h2>Reddit</h2>

      <!-- FAZER UMA CENA DESTAS PARA ORGANIZAR MELHOR OS BOTÕES  
        <nav id="menu">
          <ul>
            <li><a href="index.html">Local</a></li>
            <li><a href="index.html">World</a></li>
            <li><a href="index.html">Politics</a></li>
            <li><a href="index.html">Sports</a></li>
            <li><a href="index.html">Science</a></li>
            <li><a href="index.html">Weather</a></li>
          </ul>
        </nav>
      -->

      <button type="button" onclick="location.href='login.php';">LOGIN</button>
      <button type="button" onclick="location.href='signup.php';">SIGN UP</button>
      <button type="button" onclick="location.href='logout.php';">LOGOUT</button>
      <button type="button" onclick="location.href='edit_profile.php';">EDIT PROFILE</button>
    </header>

    <!-- ISTO SE CALHAR TAMBÉM DEVIA IR PARA O MENU -->
    <section id="new_post">
      <h3> You think you have a good history?? Share it!! </h3>
      <button type="button" onclick="location.href='new_post.php';">CREAT NEW POST</button> 
    </section>

    <section id="post">
      <?php foreach($posts as $post) { ?>
      <article> 
        <a  href="single_post.php?id=<?=$post['id']?>";><?php echo "<h3>" . $post['title'] . "</h3>";?></a>
        <?php echo "<p>" . $post['fulltext'] . "</p>"; ?> 
        <?php echo "<p> Posted by " . $post['username'] . "</p>"; ?>
      </article>
      <? } ?>
    </section>

  </body>

  <footer>
    <p>&copy; 2018 Reddit</p>
  </footer>
  
</html>