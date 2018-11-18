<?php
include_once('database/connection.php');
session_start();
?>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style.css" rel="stylesheet">
</head>

<body>
  <header id="topBar">
      <h2>Reddit</h2>
  </header>
  <?php
  if (isset($_GET['error'])) {
    echo "<p>" . $error = $_GET['error'] . "</p>";} 
  if (!isset($_SESSION["username"])){
    ?>
    <p> You must <button type="button" onclick="location.href='login.php';">Login</button></p>
    <p> Not registered? <button typo="button" onclick="location.href='signup.php'">Create an account.</button></p>
    <?php
    }
    else{
        $username=$_SESSION["username"];
        ?>
          <section id="add post">
            <form action="action_post.php" method="post" >
            <h3> Share you history <h3>
            <div> <input type="text" placeholder="Title" name="Title"> </div>
            <div> <input type="text" placeholder="Post" name="Post"> </div>
            <div> <input type="submit" value="Upload"> </div>
            </form>
          </section>
        <?php 
    }
   ?> 
</body>

<footer>
    <p>&copy; 2018 Reddit</p>
</footer>
