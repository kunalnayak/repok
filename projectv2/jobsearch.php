
<html>
<head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
</html>
<?php
include 'connect.php';
$jobtitle = $_POST['jobtitle'];
$exp = $_POST['exp'];
$location = $_POST['location'];
$sql_query = "SELECT * FROM jobsearch WHERE `designation` LIKE '$jobtitle' AND `exp`='$exp' AND `location` LIKE '$location'";
$result_query = mysqli_query($connect, $sql_query);
if(mysqli_num_rows($result_query) == 0)
{
	echo "<h1><center>NO SEARCH RESULTS</center></h1>";
}
else
{
	$row_query=mysqli_fetch_array($result_query);
	$num_rows=mysqli_num_rows($result_query);
	echo "<table id='t01' width='100%'>";
	echo "<tr><th>COMPANY NAME</th><th>DESIGNATION</th><th>SALARY</th></tr>";
	WHILE($row_query=mysqli_fetch_array($result_query))
	{
	echo "<tr>";
	echo "<td>".$row_query['company_name']."</td>";
	echo "<td>".$row_query['designation']."</td>";
	echo "<td>".$row_query['salary']."</td>";
	echo "</tr>";
	}
	echo "</table>";
}
?>
