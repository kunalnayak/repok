<?php
?>
<!DOCTYPE html>
<html>
<style>
body{
	background-image:url("456.jpg");
}
td{
	font-weight:bold;
	font-size:24px;
}
legend{
	font-size:24px;
}
</style>
<body>
<fieldset style="margin-top:10%;">
<legend>
ADMIN
</legend>
<form method="POST" action="authenticate3.php">
<table style="margin-left:30%;" cellspacing="10px" cellpadding="10px" align="center">
<tr>
<td>
Username</td>
<td>
:</td>
<td>
<input type="text" name="username" placeholder="Username"><br /></td>
</tr>
<tr>
<td>
Password
</td>
<td>:</td>
<td><input type="password" name="password" placeholder="Password"></td>
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
