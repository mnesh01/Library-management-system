<?php
session_start();
require('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<?php
include_once "header.php";
include_once "sidebar.php"; ?>

<div class="info-container">
    <div class="block">
        <h2>Registered Users:</h2>
        <p>No. of total users: <?php echo get_user_count(); ?></p>
        <a href="regusers.php" target="_blank">View Registered Users</a>
    </div>
    <div class="block">
        <h2>Registered Books:</h2>
        <p>No. of available books: <?php echo get_book_count(); ?></p>
        <a href="fetch.php" target="_blank">View Registered Books</a>
    </div>
    <div class="block">
        <h2>Issued Books:</h2>
        <p>No. Issued Books: <?php echo get_issued_book_count(); ?></p>
        <a href="viewissuedbooks.php" target="_blank">View Issued books</a>
    </div>

</div>

</body>

</html>