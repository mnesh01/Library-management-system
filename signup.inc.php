<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $name = $_POST["name"];
    $libid = $_POST["libid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($name, $libid, $email, $pwd, $pwdRepeat);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header("location: ../signup.php?error=none");
}
