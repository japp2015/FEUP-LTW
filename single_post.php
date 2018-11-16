<?php 
include_once('database/connection.php');

# Query returning all news in the database:
$id = $_GET['id'];
if (!isset($_GET['id']))
 die("No id!");

$query = $db->prepare('SELECT * FROM post');
$query->execute();
$posts = $query->fetchAll(); 

$post = getPostById($_GET['id']);
$comments= getCommentsByPostId($id);

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>

<header id="topBar">
  <h2>Reddit</h2>
  <button type="button" onclick="location.href='login.php';">Login</button>
  <button type="button" onclick="location.href='signup.php';">SIGN UP</button>
</header>


<section id="post">
<article>
  <?php
  echo $post['title'];
  ?>  
  <p> <?php echo $post['fulltext']; ?>
  <span class="author"><?=$post['username']?></span>
  <section id="comments">
  <h1><?=count($comments)?> Comments</h1>
          <?php foreach ($comments as $comment) { ?>
            <article class="comment">
              <span class="user"><?=$comment['username']?></span>
              <p class="text"><?=$comment['text']?></p>
            </article>
          <?php } ?>
  <footer>
  <p>&copy; 2018 Reddit</p>
  </footer>
</article>
</section>
