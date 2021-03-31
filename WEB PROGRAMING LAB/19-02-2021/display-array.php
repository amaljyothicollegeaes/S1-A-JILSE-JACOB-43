<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$array1=array("Amal","Reenu","Jils","Jacob");
		echo "Student Names : ";
		print_r($array1);
		echo "<br> Array in Ascending Order : ";
		asort($array1);
		print_r($array1);
		echo "<br> Array in Reverse Order : ";
		arsort($array1);
		print_r($array1);
	?>
</body>
</html>