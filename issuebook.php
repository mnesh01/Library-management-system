<?php
require('functions.php');
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/styles.css">
        <title>ISSUE BOOK</title>
    </head>

    <body>

    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>

        <form class="login-form" method="post">
        <h3>ISSUE BOOK</h3>
            <input type="text" name="BOOK_ID" placeholder="BOOK ID" required=""/>
            <input type="text" name="TITLE" placeholder="BOOK TITLE" required=""/>
            <input type="text" name="libid" placeholder="LIBRARY ID" required=""/>
            <input type="text" name="ISSUE_DATE" placeholder="ISSUE DATE" value="<?php echo date("yy-m-d"); ?>"
                   required=""/>
            <input type="text" name="RETURN_DATE" placeholder="RETURN DATE" value="<?php echo date("yy-m-d"); ?>"
                   required=""/>

            <button type="submit" name="issue_book">Issue Book</button>
    </body>

    </html>

<?php
if (isset($_POST['issue_book'])) {
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "PR");
    $query = "insert into ISSUE values($_POST[BOOK_ID],'$_POST[TITLE]',$_POST[libid],'$_POST[ISSUE_DATE]','$_POST[RETURN_DATE]')";
    $query_run = mysqli_query($connection, $query);
}
?>