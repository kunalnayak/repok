<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql_query = "SELECT * FROM admin WHERE `username`='$username' and `password`='$password'";
$result_query = mysqli_query($connect, $sql_query);
if(mysqli_num_rows($result_query) == 0)
{
	echo "No user found with such email ID and password.";
}
else
{
	echo "User login successful.";
	$row_query=mysqli_fetch_array($result_query);
	session_start();
	$_SESSION['name']=$row_query['name'];
	header("Location:admin.php");

}
?>