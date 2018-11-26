<?php 
include_once('database/connection.php');
session_start();

$username = $_GET['username'];

$user = getUserByUsername($username);
$posts = getPostsByUsername($username)

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <script src="must_login.js" defer></script>
</head>

<body>
    <?php include_once('common/header.php'); ?>

    <section id="user_info">

        <h1><?php if (isset($user['fullname'])) {
            echo $user['fullname'];
        } else {
            echo ""; 
        } ?></h1>

        <h3><?php echo $user['username'];?></h3>

        <?php if (isset($user['profile_pic'])) { ?>
            <img src="profile_pic/thumbs_small/<?=$username?>.jpg">
        <?php }
        else {
            echo "";
        } ?> 
      
        <p><?php echo $user['score'];?> points</p>

    </section>
     
    <section id="edit_profile">
        <?php if (isset($_SESSION["username"])){
            if($_SESSION["username"]==$username){ ?>
                <button type="button" onclick="location.href='edit_profile.php'">Edit profile</button>
            <?php } 
        } ?>
    </section>

    <?php foreach ($posts as $post) { ?>
        <section id="user_posts">
            <h3><a href="single_post.php?id=<?=$post['id']?>"> <?=$post['title']?></a></h3>
            <p><?=$post['fulltext']?><p>    
        </section>
    <?php } ?>

    <?php include_once('common/footer.php'); ?>

</body>

</html>