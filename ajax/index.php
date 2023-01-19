<?php
    require "function.php";
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tb_user WHERE id = $id"));
    }
    else{
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body{
            font-family:Arial Black ;
            color:black;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <center><h1> Welcome <?php  echo $user["name"];  ?></h1></center>
    <br>
    <center><a href="logout.php">Logout</a></center>
</body>
</html>