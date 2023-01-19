<?php
require("function.php");
$_SESSION=[];
session_destroy();
session_unset();
header("Location:login.php")
?>