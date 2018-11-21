<header id="topBar">
    <a href="main.php"><h1>Reddit</h1></a>
    <?php if (!isset($_SESSION['username'])) { ?>
    <nav id="menu">
        <ul>
            <li> <button type="button" onclick="location.href='login.php';">LOGIN</button> </li>
            <li> <button type="button" onclick="location.href='signup.php';">SIGN UP</button> </li>
        </ul>
    </nav>
    <?php } else { ?>
    <nav id="menu">
        <ul>
            <li> <button type="button" onclick="location.href='logout.php';">LOGOUT</button> </li>
            <li> <button type="button" onclick="location.href='edit_profile.php';">EDIT PROFILE</button> </li>
        </ul>
    </nav>
    <?php } ?>
</header>