<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>

<div id="id01" class="modal">
    <!-- multiplication sign to close window -->
    <span onclick="location.href='login.php'.style.display='none';" class="close">&times;</span>

    <form class="modal-content" action="action_login.php" method="post">
        <div class="imgcontainer">
            <img src="assets/avatar.png" width="200" height="200" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label>Username
                <input type="text" placeholder="Enter username" name="uname" required>
            </label>
            <br><br>

            <label>Password
                <input type="password" placeholder="Enter password" name="psw" required>
            </label>
            <br><br>

            <button type="submit">Login</button>
        </div>
    </form>
</div>

</body>
</html>