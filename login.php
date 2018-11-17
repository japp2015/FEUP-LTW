<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"></head>
<body>

<div class="login">
    <form class="login_content" action="action_login.php" method="post">
        <div class="imgcontainer">
            <img src="assets/avatar.png" width="200" height="200" alt="Avatar" class="avatar">
        </div>

        <div class="input_container">
            <i class="fas fa-user-alt"></i>
            <input type="text" placeholder="Enter username" name="username" required>
        </div>

        <div class="input_container">
            <i class="fas fa-unlock-alt"></i>
            <input type="password" placeholder="Enter password" name="password" required>
        </div>

        <div class="input_container">
            <button type="submit">Login</button>
        </div>

        <div class="signup_link">
            <p>Not registered? <a href="signup.php">Create an account.</a></p>
        </div>

        <?php if (isset($_GET['error'])) {
            echo "<p>" . $error = $_GET['error'] . "</p>";
        } ?>
    </form>
</div>

</body>

</html>