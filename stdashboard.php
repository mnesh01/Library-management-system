<?php
session_start();
function get_user_issue_book_count()
{
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "PR");
    $user_issue_book_count = 0;
    $query = "select count(*) as user_issue_book_count from ISSUE where libid = $_SESSION[libid]";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $user_issue_book_count = $row['user_issue_book_count'];
    }
    return ($user_issue_book_count);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>STUDENT DASHBOARD</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
<?php include "sidebar2.php" ?>
<?php include "header.php" ?>

<div class="info-container">
    <div class="block">
        <h2>Issued Books:</h2>
        <p>No. of Issued Books: <?php echo get_user_issue_book_count(); ?></p>
        <a href="issuedbook.php" target="_blank">View Issued Books</a>
    </div>
</div>

</body>

</html>