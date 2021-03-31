<html>
<head>
<title>Electricity bill</title>
</head>
<body bgcolor="silver">
<br><br><br><br>
<?php
if(isset($_POST['button'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$cusno=$_POST['cusno'];
	$addr=$_POST['addr'];
	$cread=$_POST['cread'];
	$units=$_POST['units'];
	if($units<=100){
		$bill=$units*1;
	}
	elseif($units>100 && $units<=200){
		$temp=100*1;
		$rem_units=$units - 100;
		$bill=$temp+($rem_units*1.5);
	}
	elseif($units>200 && $units<=300){
		$temp=(100*1)+(100*2);
		$rem_units=$units-200;
		$bill=$temp+($rem_units*2.5);
	}
	elseif($units>300){
		$temp=(100*1)+(100*2)+(100*3);
		$rem_units=$units-300;
		$bill=$temp+($rem_units*5);
	}
	echo "<center><form method='post'>";
	echo "<table border=1 style='text-align:justify;height:400px;width:300px;border-color:black;border-style:dashed;'><th align='center' colspan=2><u>ELECTRICITY BILL</u></th>";
	echo "<tr><td>Name:</td><td>";
	echo "$fname $lname</td></tr>";
	echo "<tr><td>Customer ID:</td><td>";
	echo "$cusno</td></tr>";
	echo "<tr><td>Address:</td><td>";
	echo "$addr</td></tr>";
	echo "<tr><td>Current reading:</td>";
	echo "<td>$cread</td></tr>";
	echo "<tr><td>Units Consumed:</td><td>";
	echo "$units</td></tr>";
	echo "<tr><td>Bill amount</td><td>";
	echo "Rs. $bill</td></tr>";
	echo "</table>";
	echo "</form>";
	echo "</center>";
}
	?>
	
	</body>
	</html>