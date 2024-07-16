<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/styles.css">
    <title>SIGNUP</title>
</head>

<body>
<?php include_once 'header.php'?>

    <form action="includes/signup.inc.php" method="post" class="signup-form">
        <h3>Sign Up</h3>
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="libid" placeholder="LibraryID" />
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pwd" placeholder="Password" />
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" />



        <button type="submit" name="submit">SIGN UP</button>
    </form>
</body>

</html>