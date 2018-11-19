<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="forms.css" rel="stylesheet">
</head>

<body>
    <div class="login">
        <form class="login_content" action="action_login.php" method="post">
            <div class="input_container">
                <span class="login-form-title">Login</span>
            </div>

            <div class="input_container">
                <input type="text" placeholder="Enter username" name="username" required>
            </div>

            <div class="input_container">
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