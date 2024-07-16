<?php
include 'connect.php';
$id =$_GET['users_id'];
$reg = "select * from users where users_id = $users_id";
$result = mysqli_query($con,$reg);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$libid = $row['libid'];
$email = $row['email'];



if(isset($_POST['update'])){

$name = $_POST['name'];
$libid = $_POST['libid'];
$email = $_POST['email'];
 

     $reg = " update users set users_id=$users_id, name='$name', libid='$libid', email = '$email' 
     where users_id = $users_id ";
     $result = mysqli_query($con,$reg);
     if($result){
         //header('location: view.php');
         echo "update successful";
     }else{
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
    <link rel="stylesheet" href="fetc.css">
    <div class="navi">
        <button type="button">
    <a href="adddashboard.php">Home</a></button> 
    </div>
    <title>Update</title>
</head>
<body>
<div class="container">
        <div class="title">
            Update students
        </div>
    <form method="post"  autocomplete="off">
        <label for="name"> name</label>
        <input type="text" name="name" value="<?php
        echo $name;?>" >
        <!-- <br><br> -->
        <label for="libid"> libid</label>
        <input type="text" name="libid" value="<?php
        echo $libid;?>">
        <!-- <br><br> -->
        <label for="email"> email</label>
        <input type="text" name="email" value="<?php
        echo $email;?>">
        

        
        <button name="update">update</button>&nbsp;
        <button ><a href="sview.php">Cancel</a></button>&nbsp;
    </form>
   </div> 
</body>
</html>


<?php ?>

 
     

