<?php
include 'connect.php';
?>
<html>
	  <head>
	  <script>
function myFunction() {
    var x, text,y,atpos,dotpos;

    // Get the value of the input field with id="numb"
    x = document.forms["myform"]["phoneno"].value.length;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x != 10) {
        alert("Invalid Phone No.");
		return false;
    } 
	else {
	y = document.forms["myform"]["email"].value;
	atpos=y.indexOf("@");
	dotpos=y.lastIndexOf(".");
	
		if(atpos<1||dotpos<atpos+2||dotpos+2>=y.length){
			alert("Not a valid E-mail address");
			return false;
		}
		else{
		   return true;
		}
	}
}
</script>
		<title>
		Register yourself
		</title>
			<style>
			body{
				background-image:url("789.jpg");
			}
			td{
				font-weight:bold;
				font-size:24px;
			}
			legend{
				font-size:24px;
			}
			</style>
	  </head>
  <body>
	<form action="register_insert2.php" method="POST">
	<fieldset>
    <table align="center" cellspacing="10px" cellpadding="10px">
	
      <tr>
	    <td>NAME</td>
		<td>:</td>
	    <td><input type="text" name="name" maxlength="50"/></td>
	  </tr>
	  
	  <tr>
	    <td>PHONE NO.</td>
		<td>:</td>
	    <td><input type="number" name="phoneno" maxlength="10"/></td>
	  </tr>
	   <tr>
	    <td>E-MAIL</td>
		<td>:</td>
	    <td><input type="email" name="email" maxlength="50"/></td>
	  </tr>
	   <tr>
	    <td>USERNAME</td>
		<td>:</td>
	    <td><input type="text" name="username" /></td>
	  </tr>
	  <tr>
	    <td>PASSWORD</td>
		<td>:</td>
	    <td><input type="password" name="password" /></td>
	  </tr>
	   <tr>
	   <td>CONFIRM PASSWORD</td>
	   <td>:</td>
	    <td><input type="password" name="password1" /></td>
	  </tr>
	  
	  <tr>
	    <td colspan="2" align="center">
		<input type="submit" value="SUBMIT" name="register_submit" /></td>
	  </tr>
	 
    </table>
	 </fieldset>
  </form>
	
  </body>
</html>