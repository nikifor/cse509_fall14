<html>
<?php session_start(); ?>

<?php
if (isset($_POST['fname'])){
 print "Thank you for registering. You will be hearing from us shortly!";
 exit(0);
}

?>

<h3>Signup to for an account on my awesome site!</h3>

<form method="POST" action="./reg.php">
<table>
<tr>
<td> First name: </td> <td><input type="text" name="fname"/></td></tr>
<tr>
<td> Last name: </td> <td><input type="text" name="lname"/></td></tr>
<tr>
<td> Email: </td> <td><input type="text" name="email"/></td></tr>
<tr> 
<td>Password: </td> <td><input type="password" name="pass1"/></td></tr>
<tr>
<td>Retype password: </td><td><input type="password" name="pass2"/></td></tr>
<tr>
<td><input type="submit" value="Register"/></td></tr>
</table>
</form>

</html>
