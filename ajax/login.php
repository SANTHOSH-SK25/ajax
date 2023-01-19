<?php
require "function.php";
if (isset($_SESSION["id"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<style>
    body{
            background-color:black;
        }
        .ab{
            width:400px;
            height:250px;
            margin:center;
            margin-left:center ;
            margin-top:center ;
            margin-right:center;
            background-color:#27AE60;
            padding-top:100px;
            
        }
        h1{
            color:white;
        }
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script type="text/javascript" src="new.js"></script>
</head>
<body>
    <center><h1>Login Page</h1></center>
    <center><div class="ab">
    <center><form action="" method="post">
        <input type="hidden" id="action" value="login">
        <label for="">Username</label>
        <input type="text" id="username" value=""><br><br>
        <label for="">Password</label>
        <input type="password" id="password" value=""><br><br>
        <button type="button" onclick="submitData();">Login</button>

    </form>
    <br>
    <a href="register.php"> Go To Register</a>
    <?php require "script.php";?>
    </center>
    </div></center>
</body>
</html>