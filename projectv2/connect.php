<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ors';
/*
mysql_connect($hostname, $username, $password) OR die("Error connecting");
mysql_select_db($database) OR die("Error selecting database");
*/
$connect = mysqli_connect($hostname, $username, $password, $database) OR die("Error connecting");
?>