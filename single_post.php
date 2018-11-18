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
  <h2 onclick="location.href='main.php';">Reddit</h2>
  <button type="button" onclick="location.href='login.php';">LOGIN</button>
  <button type="button" onclick="location.href='signup.php';">SIGN UP</button>
  <button type="button" onclick="location.href='logout.php';">LOGOUT</button>
</header>

<article>
  <section id="post">
    <?php echo $post['title']; ?>  
    <p> <?php echo $post['fulltext']; ?> </p>
    <p class="author">Posted by <?=$post['username']?> </p>
  </section>
  <section id="comments">
    <h1><?=count($comments)?> Comments</h1>
    <?php foreach ($comments as $comment) { ?>
      <span class="user"><?=$comment['username']?></span>
      <p class="text"><?=$comment['text']?></p>
    <?php } ?>
  </section>
  <section id="add comment">
  <form action="action_comment.php?id=<?=$id?>" method="post" >
        <div> <input type="text" placeholder="Add a Comment:" name="Comment"> </div>
        <div> <input type="submit" value="Upload"> </div>
  </form>
  <?php 
     if (isset($_GET['error'])) {
        echo "<p>" . $error = $_GET['error'] . "</p>";} 
  ?>
  </section>
</article>

</body>

<footer>
  <p>&copy; 2018 Reddit</p>
</footer>