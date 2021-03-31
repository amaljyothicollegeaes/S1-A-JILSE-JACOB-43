<html>
<?php
$conn = mysqli_connect("localhost", "root", "","laravel");
?>

<h3> Value Inserted</h3>

<?php

$roll=$_POST['roll'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$sql="insert into table1 (roll,name,age,gender) values($roll,'$name',$age,'$gender')";
mysqli_query($conn,$sql);
?>
</html>
