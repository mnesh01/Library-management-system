<?php
require('functions.php');
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "PR");
$name = "";
$libid = "";
$email = "";

$query = "select * from users";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title></title>
</head>

<body>
<?php include "sidebar.php" ?>
<?php include "header.php" ?>

    <table class="content_table">
        <thead>
        <tr>
            <th>Name:</th>
            <th>Library ID:</th>
            <th>Email:</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $name = $row['name'];
            $libid = $row['libid'];
            $email = $row['email'];
            ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $libid; ?></td>
                <td><?php echo $email; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</body>

</html>