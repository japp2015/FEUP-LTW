<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div class="signup">
    <form class="signup_content" action="action_signup.php" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Join us.</p>
            <hr>

            <label>Email</label>
                <input type="text" placeholder="Enter email" name="email" required>
            <br><br>

            <label>Password</label>
                <input type="password" placeholder="Enter password" name="password" required>
            <br><br>

            <label>Username</label>
                <input type="text" placeholder="Enter username" name="username" required>
            <br><br>

            <button type="submit">Sign Up</button>

            <?php if (isset($_GET['error'])) {
            echo "<p>" . $error = $_GET['error'] . "</p>";
            } ?>
            
        </div>
    </form>
</div>
</body>

</html>