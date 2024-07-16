<?php
session_start();
if (isset($_POST["submit"])) {

    // Grabbing the data
    $libid = $_POST["libid"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($libid, $pwd);

    // Running error handlers and user signup
    $login->loginUser();


    // Going to back to front page
   // header("location: ../addashboard.php");
   if($_SESSION['role']=='admin'){
    $u=$_SESSION['role'];
    header("location: ../addashboard.php?$u");
   }else{
    $u=$_SESSION['role'];
    header("location: ../stdashboard.php?$u");
   }

    // TODO check
//    if($_POST["role"] == "student") header("location: ../stdashboard.php");
//    elseif ($_POST["role"] == "admin") header("location: ../addashboard.php");
}
