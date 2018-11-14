<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form action="action_login.php" method="post">
        <div class="imgcontainer">
            <img src="" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label>Username:
                <input type="text" placeholder="Enter username" name="uname" required>
            </label>
            <br><br>

            <label>Password:
                <input type="password" placeholder="Enter password" name="psw" required>
            </label>
            <br><br>

            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>