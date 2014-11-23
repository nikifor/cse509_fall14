<html>


<?php


if(isset($_POST['username']) && isset($_POST['pass'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];

	$correct_pass = "cardinal";
	if ($username == "administrator" && $password == $correct_pass){
		print "<h3>
			<center> Admin panel </center>
			</h3>
			Welcome back admin...";
		exit(0);
	}	
	else{
		print "<center><h3>Who are you stranger?</h3></center>";
	}


}

?>

This page is for administrators... i.e., me. If you are a regular user, please help yourself to the <a href="./index.php">main page</a> of this site.

<form method="POST" action="./secret.php" >
<table>
<tr><td>Username: </td><td><input type="text" name="username"/></td></tr>
<tr><td>Password: </td><td><input type="password" name="pass"/></td></tr>
<tr><td><input type="submit" value="Login"/></td></tr>
</table>

</form>


</html>
