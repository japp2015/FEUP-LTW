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

      <?php
      if (!isset($_SESSION['username'])){?>
        <nav id="menu">
         <ul>
          <li> <button type="button" onclick="location.href='login.php';">LOGIN</button> </li>
          <li> <button type="button" onclick="location.href='signup.php';">SIGN UP</button> </li> <?php
      }else{?>
          <li> <button type="button" onclick="location.href='logout.php';">LOGOUT</button> </li>
          <li> <button type="button" onclick="location.href='edit_profile.php';">EDIT PROFILE</button> </li>
         </ul>
        </nav>
      <?php }?>
    </header>
    
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