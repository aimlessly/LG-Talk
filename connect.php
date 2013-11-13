<?php
$host = "mydbms";
$username = "aimingg";
$password = "12345678";
$db_name = "aimingg";
$con = mysql_connect($host, $username, $password) or die("Could not connect database");
mysql_select_db($db_name, $con) or die("Could not select database");
?>
