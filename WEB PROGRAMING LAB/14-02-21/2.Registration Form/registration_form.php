<html>
<head>
	<title>Registration form</title>
</head>
<body bgcolor="silver">
<form action="signup.php" method="post">
	<table>
		<tr><th>REGISTRATION FORM</th>
			<th></th></tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
		<td>
		Name : <input type=text name="name">
		</td>
		</tr>
	<tr>
		<td>
		Email: <input type="text" name="email">
		</td>
	</tr>
	<tr>
		<td>
		Username <input type="text" name="uname">
		</td>
	</tr>
		<tr>
		<td>
		Password <input type="text" name="password">
		</td>
	</tr>
	<tr>
		<td>
			<input type="Submit" value="SUBMIT">
		</td>
	</tr>
	</table>
</form>
<?php
$conn=mysqli_connect("localhost","root","","reg");
$sql="select name,email,uname,password from register;";
$result=mysqli_query($conn,$sql);
?>
<table>
<tr>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>USERNAME</th>
</tr>
</table>

		<table>
			<?php
			while($row=mysqli_fetch_assoc($result))   
			{
			?>
			<tr>
				<td><?php echo $row["name"]; '&nbsp;&nbsp;'   ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["uname"]; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
</body>
</html>