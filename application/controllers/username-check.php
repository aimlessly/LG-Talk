<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "aimingg";
$con = mysql_connect($host, $username, $password) or die("Could not connect database");
mysql_select_db($db_name, $con) or die("Could not select database");

if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysql_real_escape_string($_POST['username']));
      $query="select * from user where LOWER(username)='$username'";
      $res=mysql_query($query);
      $count=mysql_num_rows($res);
      $HTML='';
      if($count > 0){
        $HTML='user exists';
      }else{
        $HTML='';
      }
      echo $HTML;
}
?>