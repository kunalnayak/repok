<?php
include 'connect.php';
if(isset($_POST['name'])&&isset($_POST['dob'])&&isset($_POST['gender'])&&isset($_POST['phoneno'])&&isset( $_POST['address'])&&isset($_POST['password1'])&&isset($_POST['password'])&&isset($_POST['username'])&&isset($_POST['email'])&&
	!empty($_POST['name'])&&!empty($_POST['dob'])&&!empty($_POST['gender'])&&!empty($_POST['phoneno'])&&!empty( $_POST['address'])&&!empty($_POST['password1'])&&!empty($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['email'])){
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$phoneno = $_POST['phoneno'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($password)&&!empty($password1)){
		if($password1==$password){
			$sql_query = "INSERT INTO jobseeker(name,dob,gender,address,phoneno,username,email,password) VALUES ('$name','$dob','$gender','$address','$phoneno','$username','$email','$password')";
			if(mysqli_query($connect, $sql_query)){
				header("Location:index.php");
			}
			else{
				echo 'Registration unsuccessful, please try again';
			}
		}
		else{
			echo "Entered passwords does not match.";
		}
	}
}
else{
	echo "Please enter the details!";
}
?>