<?php
$server_name = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user_name = "b0c76b6faf22b0";
$password = "3c29e0f4";
$con = mysql_connect($server_name, $user_name, $password)
or die ('Server Error: ' . mysql_error());
//select database for use
$database_name = 'electricpower';
mysql_select_db($database_name) or die ('DB Error: Unable to select db');
mysql_query("SET NAMES 'utf8'");
?>