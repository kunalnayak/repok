<?php
include 'connect.php';
if(isset($_POST['name'])&&isset($_POST['phoneno'])&&isset($_POST['password1'])&&isset($_POST['password'])&&isset($_POST['username'])&&isset($_POST['email'])&&
	!empty($_POST['name'])&&!empty($_POST['phoneno'])&&!empty($_POST['password1'])&&!empty($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['email'])){
	$name = $_POST['name'];
	$phoneno = $_POST['phoneno'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($password)&&!empty($password1)){
		if($password1==$password){
			$sql_query = "INSERT INTO recruiter(name,phoneno,username,email,password) VALUES ('$name','$phoneno','$username','$email','$password')";
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