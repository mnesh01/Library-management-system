<?php
session_start();

include 'connect.php';

$id = $_GET['id'];
$reg = "select * from BOOKS where id = $id";
$result = mysqli_query($con, $reg);
$row = mysqli_fetch_assoc($result);
$BOOK_ID = $row['BOOK_ID'];
$TITLE = $row['TITLE'];
$COURSE = $row['COURSE'];
$AUTHOR_NAME = $row['AUTHOR_NAME'];
$PUBLISHER = $row['PUBLISHER'];
$COPIES = $row['COPIES'];


if (isset($_POST['update'])) {

    $BOOK_ID = $_POST['BOOK_ID'];
    $TITLE = $_POST['TITLE'];
    $COURSE = $_POST['COURSE'];
    $AUTHOR_NAME = $_POST['AUTHOR_NAME'];
    $PUBLISHER = $_POST['PUBLISHER'];
    $COPIES = $_POST['COPIES'];


    $reg = " update BOOKS set id=$id, BOOK_ID='$BOOK_ID', TITLE='$TITLE', COURSE = '$COURSE',AUTHOR_NAME='$AUTHOR_NAME', PUBLISHER='$PUBLISHER',COPIES='$COPIES'
     where id = $id ";
    $result = mysqli_query($con, $reg);
    if ($result) {
        //header('location: view.php');
        echo "update successful";
    } else {
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Update</title>
</head>
<body>
<?php include "header.php" ?>
<?php include "sidebar.php" ?>


<form method="post" autocomplete="off" class="update-form">
    <h3>Update books</h3>

    <div>
        <label for="BOOK_ID"> BOOK_ID</label>
        <input type="text" name="BOOK_ID" value="<?php echo $BOOK_ID; ?>">
    </div>
    <!-- <br><br> -->
    <div>
    <label for="TITLE"> TITLE</label>
    <input type="text" name="TITLE" value="<?php echo $TITLE; ?>">
    </div>
    <!-- <br><br> -->
    <div>
    <label for="COURSE"> COURSE</label>
    <input type="text" name="COURSE" value="<?php echo $COURSE; ?>">
    </div>

    <div>
    <label for="AUTHOR_NAME">AUTHOR_NAME</label>
    <input type="text" name="AUTHOR_NAME" value="<?php echo $AUTHOR_NAME; ?>">
    </div>
    <!-- <br><br> -->
    <div>
    <label for="PUBLISHER">PUBLISHER</label>
    <input type="text" name="PUBLISHER" value="<?php echo $PUBLISHER; ?>">
    </div>

    <div>
    <label for="COPIES">COPIES</label>
    <input type="text" name="COPIES" value="<?php echo $COPIES; ?>">
    </div>


    <div>
    <button name="update">update</button>&nbsp;
    <a href="manage.php">Cancel</a>&nbsp;
    </div>
</form>

</body>
</html>


<?php ?>

 
     

