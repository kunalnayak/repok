<?php
include 'connect.php';
?>
<html>
  <head>
    <title>photoz</title>
  </head>
  <body>
  <form action="authenticate.php" method="POST">
    <table align="center">
      <tr>
	    <td>EMAIL:</td>
	    <td><input type="text" name="email" maxlength="50"/></td>
	  </tr>
	  <tr>
	    <td>PASSWORD:</td>
	    <td><input type="password" name="password" /></td>
	  </tr>
	  <tr>
	    <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="login_submit" /></td>
	  </tr>
	  <tr>
	    <td colspan="2" align="center"><a href="register.php">Register</a></td>
	  </tr>
    </table>
  </form>
</html>