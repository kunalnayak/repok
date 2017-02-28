<?php
include 'connect.php';
if(isset($_POST['NAME'])&&isset($_POST['DATE'])&&isset($_POST['GENDER'])&&isset($_POST['CATEGORY'])&&isset( $_POST['NATIONALITY'])&&isset($_POST['EMAIL'])&&isset($_POST['PINCODE'])&&isset($_POST['BRANCH'])&&isset($_POST['STD_CODE'])
	!empty($_POST['NAME'])&&!empty($_POST['DATE'])&&!empty($_POST['GENDER'])&&!empty($_POST['CATEGORY'])&&!empty( $_POST['NATIONALITY'])&&!empty($_POST['EMAIL'])&&!empty($_POST['PINCODE'])&&!empty($_POST['BRANCH'])!empty($_POST['STD_CODE'])){
	$name = $_POST['NAME'];
	$dob = $_POST['DATE'];
	$gender = $_POST['GENDER'];
	$category = $_POST['CATEGORY'];
	$nationality = $_POST['NATIONALITY'];
	$email = $_POST['EMAIL'];
	$pincode = $_POST['PINCODE'];
	$branch = $_POST['BRANCH'];
    $phoneno=$_POST['STD_CODE'];

		$sql_query = "INSERT INTO exam (name,dob,gender,category,phoneno,branch,email,pincode,nationality) VALUES ('$name','$dob','$gender','$category','$phoneno','$branch','$email','$pincode','$nationality')";
			if(mysqli_query($connect, $sql_query)){
				header("Location:index.php");
					
			}
			else{
				echo 'Registration unsuccessful, please try again';
			}
}
else{
	echo "Please enter the details!";
}
?>