<?php 
include_once('database/connection.php');
session_start();

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
    <title>Reddit</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
</head>

<body>

    <?php include_once('header.php'); ?>

    <article>
        <section id="post">
            <?php echo $post['title']; ?>
            <p><?php echo $post['fulltext']; ?></p>
            <?php if (isset($_SESSION['username'])) { ?>
                <button type="button" onclick="location.href='add_score.php?id=<?=$_GET['id']?>';">Like</button>
                <button type="button" onclick="location.href='subtract_score.php?id=<?=$_GET['id']?>';">Dislike</button>
            <?php } ?>
            <p> Score:<?php echo $post['post_score']; ?></p>
            <p class="author"><?php echo "<p> Posted by <a href='view_profile.php?username=". $post['username'] ."'>" . $post['username'] . "</a></p>"; ?></p>
            <?php if (isset($_SESSION['username'])) {
                if ($post['username']==$_SESSION['username']) { ?>
                    <button type="button" class="delete" onclick="location.href='delete_post.php?id=<?=$post['id']?>';">Delete your post</button>
                <?php }
            }?>
        </section>

        <section id="comments">
            <h1><?=count($comments)?> Comments</h1>
            <?php foreach ($comments as $comment) { ?>
                <span class="user"><?php echo "<p> Comment by <a href='view_profile.php?username=". $comment['username'] ."'>" . $comment['username'] . "</a></p>"; ?></span>
                <p class="text"> <?=$comment['text']?> </p>
                <?php if (isset($_SESSION['username'])) {
                    if ($comment['username']==$_SESSION['username']) { ?>
                        <button type="button" class="delete" onclick="location.href='delete_comment.php?id_comment=<?=$comment['id']?>&id_post=<?=$post['id']?>';">Delete your comment</button>
                    <?php }?>
                    <p> <button type="button" onclick="location.href='add_score_comment.php?comment_id=<?=$comment['id']?>&post_id=<?=$_GET['id']?>';">Like</button>
                    <button type="button" onclick="location.href='subtract_score_comment.php?comment_id=<?=$comment['id']?>&post_id=<?=$_GET['id']?>';">Dislike</button>
                    </p>
                <?php } ?>
                <p> Score: <?php echo $comment['comment_score']; ?> </p>
            <?php } ?>
        </section>

        <section id="add comment">
        <?php if (isset($_SESSION["username"])) { ?>
            <p><form action="action_comment.php?id=<?=$id?>" method="post"></p>
            <div> <input type="text" placeholder="Add a Comment:" name="Comment"> </div>
            <div> <input type="submit" value="Upload"> </div>
            </form>
            <?php } ?>
        </section>
        
    </article>

    <?php include_once('footer.php'); ?>

</body>

</html>