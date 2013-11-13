<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<?php

$host="mydbms"; // Host name 
$username="aimingg"; // Mysql username 
$password="12345678"; // Mysql password 
$db_name="aimingg"; // Database name 
$tbl_name1="user"; // Table name 
$tbl_name2="contact"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_query("SET character_set_results=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");
    mysql_query("SET collation_connection = utf8");
    mysql_query("SET collation_database = utf8");
    mysql_query("SET  collation_server = utf8");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$myemail=$_POST['myemail']; 

$sql1 = "insert into $tbl_name1 (username, password, email) values ('$myusername', '$mypassword', '$myemail')"; // กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$dbquery1 = mysql_db_query($db_name, $sql1);
$sql2 = "insert into $tbl_name2 (username) values ('$myusername')";
$dbquery2 = mysql_db_query($db_name, $sql2);

// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<Font Size=4 color=green align=center><B>สมัครสมาชิกสำเร็จ !</B>";
header('Refresh: 2; url=index.php'); 
?>

