<html>
<body>
<h2>REGISTER HERE</h2>
	<form action="web1.php" method="post" >
		<table>

<tr><td>Roll NO : </td><td><input type="text" name="roll"><br></td></tr>
<tr><td>Name :</td><td> <input type="text" name="name"><br></td></tr>
<tr><td>Age : </td><td><input type="text" name="age"><br></td></tr>
<tr><td>Name : </td><td><input type="text" name="name"><br></td></tr>
<tr><td>Gender :</td><td><input type="text" name="gender"><br></td></tr>
<tr><td><input type="submit"></td><td></td></tr>
</table>
</form>
<?php

$conn = mysqli_connect("localhost", "root","","laravel");
$sql="select roll,name,age,gender from table1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
echo mysqli_num_rows($result)." Rows Found..!!";
?>
<table border="1"><tr>
<td>roll</td><td>name</td><td>age</td><td>gender</td>
</tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["roll"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["gender"];?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>

