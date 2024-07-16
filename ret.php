<?php

$id = $_GET['id'];
$title =  $_GET['title'];

return_book($id, $title);
function return_book($id, $title)
{
  
    $sql = "DELETE FROM `ISSUE` WHERE id = $id";
    $con = mysqli_connect('localhost', 'root', '', 'PR');
    $query = mysqli_query($con, $sql);



    //$sql = "INSERT INTO `BOOKS` VALUES($id, $title)";
    //$query = mysqli_query($con, $sql);

   // header("location: return.php?returned=successfully");
}
