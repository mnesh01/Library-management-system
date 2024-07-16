<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<?php include "header.php" ?>
<?php include "sidebar.php" ?>

    

    <div class="addbook">
        <div class="form">
            <form class="login-form" action="connect1.php" method="post">
            <h3>ADD BOOK</h3>
                <input type="text" name="BOOK_ID" placeholder="BOOK ID" />
                <input type="text" name="TITLE" placeholder="BOOK TITLE" />
                <input type="text" name="COURSE" placeholder="AUTHOR NAME" />
                <input type="text" name="AUTHOR_NAME" placeholder="COURSE" />
                <input type="text" name="PUBLISHER" placeholder="PUBLISHER" />

                <button type="submit" name="SEND">SEND</button>
        </div>
    </div>
</body>

</html>