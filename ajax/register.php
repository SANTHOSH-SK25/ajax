<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            background-color:black;
        }
        .ab{
            width:400px;
            height:300px;
            margin:center;
            margin-left:center ;
            margin-top:center ;
            margin-right:center;
            background-color:#27AE60;
            padding-top:70px;
            
        }
        
        h2{
            color:white;
        }
       
    </style>
    
</head>
<body>
    <center><h2>Registration page</h2><center>
    <div class="ab">
    <form action="" method="post">

       <input type="hidden" id="action" value="register"><br>
        <br>
        <label for="">Name</label>
        <input type="text" id="name" value=""><br>
        <br>
        <label for="">Username</label>
        <input type="text" id="username" value=""><br>
        <br>
        <label for="">Password</label>
        <input type="password" id="password" value=""><br>
        <br>
        <button type="button" onclick="submitData();">Register</button><br>
        <br>
        <a href="login.php">Go to login</a>
        <?php require "script.php";?>
    </form>
    </div>
    <br>
    
</body>
</html>