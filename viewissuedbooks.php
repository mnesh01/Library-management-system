<?php
$con = mysqli_connect('localhost', 'root', '', 'PR');
$sql = "SELECT * FROM ISSUE";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck <= 0) {
    print_r('no data in the database');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Records</title>
</head>

<body>
<?php include "header.php" ?>
<?php include "sidebar.php" ?>

<table class="content_table">
    <thead>
    <tr>
        <th>STUDENT ID</th>
        <th>BOOK_ID</th>
        <th>TITLE</th>
        <th>ISSUE DATE</th>
        <th>RETURN DATE</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $rows['libid']; ?></td>
            <td><?php echo $rows['BOOK_ID']; ?></td>
            <td><?php echo $rows['TITLE']; ?></td>
            <td><?php echo $rows['ISSUE_DATE']; ?></td>
            <td><?php echo $rows['RETURN_DATE']; ?></td>

        </tr>
        <?php
    }
    ?>


    </tbody>
</table>
</body>

</html>