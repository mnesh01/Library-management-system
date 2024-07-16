<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<?php include_once 'header.php'?>


   <div class="login-page">
        <div class="form">
            <form class="login-form" action="includes/login.inc.php" method="post">
                <h3>Log In</h3>
                <input type="text" name="libid" placeholder="LibraryID" />
                <input type="password" name="pwd" placeholder="Password" />
                <button type="submit" name="submit">login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>