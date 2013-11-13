<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php

$host="mydbms"; // Host name 
$username="aimingg"; // Mysql username 
$password="12345678"; // Mysql password 
$db_name="aimingg"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_query("SET character_set_results=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");
    mysql_query("SET collation_connection = utf8");
    mysql_query("SET collation_database = utf8");
    mysql_query("SET  collation_server = utf8");
mysql_select_db("$db_name")or die("cannot select DB"); 

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo '<script language="javascript">';
echo 'alert("Wrong Username, Password. Please try again.")';
echo '</script>';
header('Refresh: 1; url=index.php');
}
?>
</html>
