<?php
session_start();
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>MANAGE STUDENTS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="CSS/styles.css">

</head>

<body>
	<?php include "sidebar.php" ?>
	<?php include "header.php" ?>

		<h2 class="view-users-h2">STUDENTS</h2>
		<table class="content_table">
			<thead>
				<tr>
					<th>NAME</th>
					<th>LIBRARY ID</th>
					<th>EMAIL</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
				?>

						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['libid']; ?></td>
							<td><?php echo $row['email']; ?></td>
                            
							<!-- <button><a href="update.php?updateid='.$id.'">update</a>    </button> -->
							<td><a class="edit" href="supdate.php?id=<?php echo $row['users_id']; ?>">update</a>&nbsp;
                                <a class="delete" href="sdelete.php?id=<?php echo $row['users_id']; ?>">Delete</a></td>
						</tr>

				<?php		}
				}
				?>

			</tbody>
		</table>
</body>

</html>