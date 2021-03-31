<html>
<head><title>index</title>
<style>
body
{
    background-image: url(img2.jpg);
    background-size: cover;
    margin: 0;
    padding: 0;
    background-position: absolute;
    
}       
.main
{
    
    height:100%;
    width:10%;
    transform: translate(20%);
    box-sizing: border-box;
    

}
table{
    
    background: rgb(53, 48, 48);
    color: #fff;
    top: 10%;
    left: 25%;
    position: absolute;
    
    box-sizing: border-box;
    
}
td{
    color: yellowgreen;
    
}


</style>
</head>
<body>

<div class="main">
    <br>
    <br>
<a href="index.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Dashboard"/></a><br><br>
<a href="search.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Billing"/></a><br><br>
<a href="medupdate.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Update-Med"/></a><br><br>
<a href="content.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="+ Add Medicine"/></a><br><br>
<a href="deletion.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Deletion"/></a><br><br>
<a href="logout.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="❮  LOGOUT"/></a><br><br>


</div>


<?php
session_start();
include("connection.php");
include("function.php");
$userdata= checklogin($con);
$tablenamenotpure=$userdata['email'];
$tablenamepure=preg_replace('/[^a-zA-Z0-9_ -]/s','',$tablenamenotpure);
$table ="select * from $tablenamepure "; 
$result = mysqli_query($con,$table);
$count=1;
if($result == null)
{
    echo "table not present";
    $table1="CREATE TABLE  $tablenamepure (Medicinename varchar(35) NOT NULL UNIQUE,Price INT(10) NOT NULL,Quantity INT(10) NOT NULL,Id INT PRIMARY KEY AUTO_INCREMENT) ";
    $result1=mysqli_query($con,$table1);
    
    
}
else
{
    $table1="select * from $tablenamepure order by Medicinename asc ";
    $result1=mysqli_query($con,$table1);
    ?>
    <form onsubmit="cal()" method="POST">
    <table border='10px' cellpadding='20'><tr>
    <th>No.</th><th>Medicinename</th><th>Price</th><th>Available-Quantity</th><th>Item ID</th><!--th>Select</th><th>Enter Quantity</th>-->
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
    ?>
    <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row["Medicinename"];?></td>
    <td><?php echo $row["Price"];?></td>
    <td><?php echo $row["Quantity"];?></td>
    <td><?php echo $row["Id"];?></td>
    <!--<td><input type="radio" value="<?php $row["Medicinename"]?>"/></td>
    <td><input type="text" value="" name="<?php $row["Medicinename"]?>"/></td> -->
    </tr>
    <?php
    $count=$count+1;
    }?>
    <!--<tr>
    <td colspan=5 align="center">
        <input type="reset">
    <input type="submit" value="Print" >
    </td></tr>
    <tr><td colspan=5 align="center"><h4 id="display" style="margin: 0;">hai all</h4></td></tr>-->
    
    </form>
    
    <script language="javascript" type="text/javascript">

     

    </script>
    </body>
    </html>
    <?php
}
?>
