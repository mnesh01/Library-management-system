<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link rel="stylesheet" href="CSS/libindex.css">-->
    <link rel="stylesheet" href="CSS/styles.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<header>
    <nav>
        <label>LIBRARY MANAGEMENT SYSTEM</label>

        <ul class="menu-main">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="books.php">ADD BOOKS</a></li>

        </ul>
        <ul class="menu-member">
            <?php
            if (isset($_SESSION["users_id"])) {
                ?>
                <li><a href="#"><?php echo $_SESSION["name"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                <?php
            } else {
                ?>
                <li><a href="signup.php">SIGN UP</a></li>
                <li><a href="login.php" class="header-login-a">LOGIN</a></li>
                <?php

            }
            ?>
        </ul>
    </nav>
</header>
</body>
</html>