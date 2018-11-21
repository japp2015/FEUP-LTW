<?php include_once('database/connection.php');
session_start();

$username = $_GET['username'];
if (!isset($_GET['username']))
  die("No id!");

$user = getUserByUsername($username);
$posts = getPostsByUsername($username)
  ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <script src="must_login.js" defer></script>
</head>

<body>
    <?php include_once('header.php'); ?>

    <section id="user_info">
    
    <h1> <?php echo $user['username'];?> Profile </h1>

    <p> Fulname: <?php
        if (isset($user['fullname'])){
            echo $user['fullname'];
        }else{
            echo "Not Defined";} ?> 
    </p>

    <p> Profile Pic: <?php
        if (isset($user['profile_pic'])){?>
            <p> <img src="profile_pic/thumbs_small/<?=$username?>.jpg"></p>
        <?php } else {
            echo "Not Defined";} ?> 
    </p>
      
    <p> Score: <?php echo $user['score'];?> </p>

    </section>
     
    <section id=edit_profile>

    <?php if (isset($_SESSION["username"])){
          if($_SESSION["username"]==$username){ ?>
             <h2> Outdated Informations? <a href="edit_profile.php"> Edit Profile </a> </h2>
          <?php } 
    } ?>
    
    </section>

    <?php foreach ($posts as $post) { ?>
        
        <section id="user_posts">
            
            <h1><a href="single_post.php?id=<?=$post['id']?>"> <?=$post['title']?> </a> </h1>
            <p><?=$post['fulltext']?> <p>    
        
        </section>
            
    <?php } ?>
    
    



    <?php include_once('footer.php'); ?>

</body>

</html>