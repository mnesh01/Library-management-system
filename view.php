<?php
session_start();
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM BOOKS";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="CSS/styles.css">

</head>

<body>
	<?php include "sidebar.php" ?>
	<?php include "header.php" ?>

		<h2 class="view-users-h2">BOOKS</h2>
		<table class="content_table">
			<thead>
				<tr>
					<th>BOOK_ID</th>
					<th>TITLE</th>
					<th>COURSE</th>
					<th>AUTHOR_NAME</th>
					<th>PUBLISHER</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
				?>

						<tr>
							<td><?php echo $row['BOOK_ID']; ?></td>
							<td><?php echo $row['TITLE']; ?></td>
							<td><?php echo $row['COURSE']; ?></td>
							<td><?php echo $row['AUTHOR_NAME']; ?></td>
							<td><?php echo $row['PUBLISHER']; ?></td>
							<!-- <button><a href="update.php?updateid='.$id.'">update</a>    </button> -->
							<td><a class="edit" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                                <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>

				<?php		}
				}
				?>

			</tbody>
		</table>

</body>

</html>