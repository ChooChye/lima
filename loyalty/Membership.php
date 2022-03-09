<html>
<head>
<title>Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body>
<?php
include("config.php");
if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "")
	{
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	}
	else
	{
		mysql_query("insert into login(firstname, lastname, email, username,password,dtime) values('$firstname','$lastname','$email','$user','$pass',now())",$conn)
		or die("Could not execute the insert query.");
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='index.php'>Login</a>";
	}
}
else
{

?>
	<p><font size="+2">Register:</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="27%">First Name</td>
				<td width="73%"><input type="text" name="firstname"></td>
			</tr>
            <tr> 
				<td width="27%">Last Name</td>
				<td width="73%"><input type="text" name="lastname"></td>
			</tr>
            <tr> 
				<td width="27%">Email</td>
				<td width="73%"><input type="text" name="email"></td>
			</tr>
            <tr> 
				<td width="27%">Username</td>
				<td width="73%"><input type="text" name="username"></td>
      </tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

<?php
}
?>
</body>
</html>
