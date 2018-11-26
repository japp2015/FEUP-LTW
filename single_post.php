<?php 
include_once('database/connection.php');
session_start();

$id = $_GET['id'];
if (!isset($_GET['id']))
  die("No id!");


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
    <link href="css/posts.css" rel="stylesheet">
    <link href="css/comments.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include_once('common/header.php'); ?>

    <article class="all">
        <section id="post">
            <h3><?php echo $post['title']; ?></h3>
            <p><?php echo $post['fulltext']; ?></p>
            <?php echo "<p> Posted by <a href='view_profile.php?username=". $post['username'] ."'>" . $post['username'] . "</a></p>"; ?>
            <?php if (isset($_SESSION['username'])) { ?>
                <button type="button" class="fa fa-thumbs-up" onclick="location.href='add_score.php?id=<?=$_GET['id']?>&value=1';"></button>
                <button type="button" class="fa fa-thumbs-down" onclick="location.href='add_score.php?id=<?=$_GET['id']?>&value=-1';"></button>
            <?php } ?>
            <?php if (isset($_SESSION['username'])) {
                if ($post['username']==$_SESSION['username']) { ?>
                    <button type="button" class="delete" onclick="location.href='delete_post.php?id=<?=$post['id']?>';">Delete</button>
                <?php }
            } ?>
            <div class="score"><p><?php echo $post['post_score']; ?> points</p></div>
            <div class="comments"><p class="comments"><?=count($comments)?> comments</p></div>
        </section>

        <section id="comments">
            <?php foreach ($comments as $comment) { ?>
                <span class="user"><?php echo "<p><a href='view_profile.php?username=". $comment['username'] ."'>" . $comment['username'] . "</a></p>"; ?></span>
                <p class="text"> <?=$comment['text']?> </p>
                <button type="button" class="fa fa-thumbs-up" onclick="location.href='add_score_comment.php?comment_id=<?=$comment['id']?>&post_id=<?=$_GET['id']?>&value=1';"></button>
                <button type="button" class="fa fa-thumbs-down" onclick="location.href='add_score_comment.php?comment_id=<?=$comment['id']?>&post_id=<?=$_GET['id']?>&value=-1';"></button>
                <?php if (isset($_SESSION['username'])) {
                    if ($comment['username']==$_SESSION['username']) { ?>
                        <button type="button" class="delete" onclick="location.href='delete_comment.php?id_comment=<?=$comment['id']?>&id_post=<?=$post['id']?>';">Delete</button>
                    <?php }
                    } ?>
                <p><?php echo $comment['comment_score']; ?> points</p>
            <?php } ?>
        </section>

        <section class = "add_comment">
        <?php if (isset($_SESSION["username"])) { ?>
            <p><form action="action_comment.php?id=<?=$id?>" method="post"></p>
            <div> <input type="text" placeholder="Add comment" name="Comment"> </div>
            <div> <input type="submit" value="Upload"> </div>
            </form>
            <?php } ?>
        </section>
        
    </article>

    <?php include_once('common/footer.php'); ?>

</body>

</html>