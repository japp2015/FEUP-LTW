<?php 
include_once('database/connection.php');
session_start();

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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
</head>

<body>

    <header id="topBar">
        <h1>Reddit</h1>
        <?php if (!isset($_SESSION['username'])) { ?>
        <nav id="menu">
            <ul>
                <li> <button type="button" onclick="location.href='login.php';">LOGIN</button> </li>
                <li> <button type="button" onclick="location.href='signup.php';">SIGN UP</button> </li>
                <?php } else { ?>
                <li> <button type="button" onclick="location.href='logout.php';">LOGOUT</button> </li>
                <li> <button type="button" onclick="location.href='edit_profile.php';">EDIT PROFILE</button> </li>
            </ul>
        </nav>
        <?php } ?>
    </header>

    <article>
        <section id="post">
            <?php echo $post['title']; ?>
            <p>
                <?php echo $post['fulltext']; ?>
            </p>
            <p class="author">Posted by
                <?=$post['username']?>
            </p>
            <?php If (isset($_SESSION['username'])) {
          If ($post['username']==$_SESSION['username']){?>
            <button type="button" class="delete" onclick="location.href='delete_post.php?id=<?=$post['id']?>';">Delete
                Your Post</button>
            <?php }
    }?>

        </section>
        <section id="comments">
            <h1>
                <?=count($comments)?> Comments</h1>
            <?php foreach ($comments as $comment) { ?>
            <span class="user">
                <?=$comment['username']?></span>
            <p class="text">
                <?=$comment['text']?>
            </p>
            <?php If (isset($_SESSION['username'])) {
          If ($comment['username']==$_SESSION['username']){?>
            <button type="button" class="delete" onclick="location.href='delete_comment.php?id_comment=<?=$comment['id']?>&id_post=<?=$post['id']?>';">Delete
                Your Comment</button>
            <?php }
      }
    } ?>
        </section>
        <section id="add comment">
            <p>
                <form action="action_comment.php?id=<?=$id?>" method="post">
            </p>
            <div> <input type="text" placeholder="Add a Comment:" name="Comment"> </div>
            <div> <input type="submit" value="Upload"> </div>
            </form>
            <?php 
     if (isset($_GET['error'])) {
        echo "<p>" . $error = $_GET['error'] . "</p>";} 
  ?>
        </section>
    </article>

    <footer>
        <p>&copy; 2018 Reddit</p>
    </footer>

</body>

</html>