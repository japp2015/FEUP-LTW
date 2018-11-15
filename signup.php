<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div id="id02" class="modal">
    <!-- multiplication sign to close window -->
    <span onclick="location.href='signup.php'.style.display='none';" class="close">&times;</span>

    <form class="modal-content" action="action_signup.php" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Join us.</p>
            <hr>

            <label>Email</label>
                <input type="text" placeholder="Enter email" name="email" required>
            <br><br>

            <label>Password</label>
                <input type="password" placeholder="Enter password" name="psw" required>
            <br><br>

            <label>Username</label>
                <input type="text" placeholder="Enter username" name="uname" required>
            <br><br>

            <button type="submit">Sign Up</button>
        </div>
    </form>
</div>
</body>
</html>