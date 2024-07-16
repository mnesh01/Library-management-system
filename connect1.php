<?php

$BOOK_ID = $_POST['BOOK_ID'];
$TITLE = $_POST['TITLE'];
$COURSE = $_POST['COURSE'];
$AUTHOR_NAME = $_POST['AUTHOR_NAME'];
$PUBLISHER = $_POST['PUBLISHER'];

$conn = new mysqli('localhost', 'root', '', 'PR');
if ($conn->connect_error) {
    die('Connection Failed  :  ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into BOOKS(BOOK_ID, TITLE, COURSE, AUTHOR_NAME, PUBLISHER)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $BOOK_ID, $TITLE, $COURSE, $AUTHOR_NAME, $PUBLISHER);
    $stmt->execute();
    echo "BOOK WAS ADDED SUCCESSFULLY";
    $stmt->close();
    $conn->close();
    header("location:addbook.php");
}
