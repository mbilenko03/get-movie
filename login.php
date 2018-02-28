<?php
$host = "localhost";
$dbname ="media";//replace with your database name!!!
$username = "mrwdpetry";//replace with your user name!!!
$password = "";

$db_server = mysql_connect($host, $username, $password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($dbname)
	or die("Unable to select database: " . mysql_error());
?>
