<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Table with database</title>
</head>

<body>
<table class="content_table">
    <thead>
    <tr>
        <th>BOOK_ID</th>
        <th>TITLE</th>
        <th>COURSE</th>
        <th>AUTHOR_NAME</th>
        <th>PUBLISHER</th>
        <th>COPIES</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "PR");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT BOOK_ID, TITLE, COURSE, AUTHOR_NAME, PUBLISHER, COPIES FROM BOOKS ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            "<tr><td>" . $row["BOOK_ID"] . "</td><td>" . $row["TITLE"] . "</td><td>" . $row["COURSE"] . "</td></tr>" . $row["AUTHOR_NAME"] . "</td><td>" . $row["PUBLISHER"] . "</td><td>" . $row["COPIES"] . "</td><td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </tbody>
</table>
</body>

</html>