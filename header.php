<?php
session_start();
?>
<header>
    <nav>
        <label>LIBRARY MANAGEMENT SYSTEM</label>

        <ul class="menu-main">
            <li><a href="index.php">HOME</a></li>
            <li><a href="fetch.php">BOOKS</a></li>
            <li><a href="#">FEEDBACK</a></li>
        </ul>
        <ul class="menu-member">
            <?php
            if (isset($_SESSION["role"])) {
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