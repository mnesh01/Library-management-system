<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "PR");
$BOOK_ID = "";
$TITLE = "";
$libid = "";
$ISSUE_DATE = "";
$RETURN_DATE = "";

$query = "select BOOK_ID,TITLE,libid,ISSUE_DATE,RETURN_DATE from issued_books where libid = $_SESSION[libid] ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title></title>
</head>

<body>
<?php include "header.php" ?>
<?php include "sidebar2.php" ?>


<table class="content_table">
    <thead>
    <tr>
        <th>BOOK ID:</th>
        <th>BOOK TITLE:</th>
        <th>ISSUE_DATE:</th>
        <th>RETURN_DATE:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $BOOK_ID = $row['BOOK_ID'];
        $TITLE = $row['TITLE'];
        $ISSUE_ID = $row['ISSUE_ID'];
        $RETURN_ID = $row['RETURN_ID'];
        ?>
        <tr>
            <td><?php echo $BOOK_ID; ?></td>
            <td><?php echo $TITLE; ?></td>
            <td><?php echo $ISSUE_ID; ?></td>
            <td><?php echo $RETURN_ID; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

</body>

</html>