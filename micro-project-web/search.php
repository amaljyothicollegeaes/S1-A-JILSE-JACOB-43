<?php
session_start();
include("connection.php");
include("function.php");
$userdata= checklogin($con);
$tablenamenotpure=$userdata['email'];
$tablenamepure=preg_replace('/[^a-zA-Z0-9_ -]/s','',$tablenamenotpure);
$table ="select * from $tablenamepure "; 
$result = mysqli_query($con,$table);
?>


<html>
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
    top: 15%;
    left: 30%;
    position: absolute;
    
    box-sizing: border-box;
}
</style>
<body>
<div class="main"><br><br>
<a href="index.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Dashboard"/></a><br><br>
<a href="search.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Billing"/></a><br><br>
<a href="medupdate.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Update-Med"/></a><br><br>
<a href="content.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="+ Add Medicine"/></a><br><br>
<a href="deletion.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="Deletion"/></a><br><br>
<a href="logout.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;" value="❮  LOGOUT"/></a><br><br>
</div>
<form method="post" >
<table>
<tr>
<td>ITEM NAME</td>
<td>QTY</td>
<td><td>
</tr>
<tr>
<td><input type="text" name="item" id="item" placeholder="Enter Item Name" required/></td>
<td><input type="number" name="qty" id="qty" placeholder="0" required/><td>
<td><input type="submit" value="Enter" name="submit"></center><br></td>
</tr>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    switch($_POST['submit']) 
    {   
        case 'Enter':       
            
            $item=$_POST['item'];
            $quantity=$_POST['qty'];
            $table1="select * from $tablenamepure where Medicinename = '$item' ";
            $result1=mysqli_query($con,$table1);
            if($row=mysqli_fetch_assoc($result1))
            {
                
                $total=$quantity*$row['Price'];
                $med=$row['Medicinename'];
                $price=$row['Price'];
                $tablename=$tablenamepure.'temp';
                $table2="select * from $tablename";
                $result2=mysqli_query($con,$table2);
                if($result2 == null)
                {
                $table3="CREATE TABLE $tablename (Medicinename varchar(35) NOT NULL UNIQUE,Price INT(10) NOT NULL,Quantity INT(10) NOT NULL,Id INT PRIMARY KEY AUTO_INCREMENT,Total INT(50) NOT NULL) ";
                $result3=mysqli_query($con,$table3);

                $tableinserted = "insert into $tablename (Medicinename, Price,Quantity,Total) values ('$med',$price,$quantity,$total)";
                    if($result4=mysqli_query($con,$tableinserted))
                    {   
                        
                        
                    }
                }
                else
                {
                    $tableinserted = "insert into $tablename (Medicinename, Price,Quantity,Total) values ('$med',$price,$quantity,$total)";
                    if($result4=mysqli_query($con,$tableinserted))
                    {
                        
                    }

                }
                if($result4 != null)
                {
                    $display = "select * from $tablename ";
                    $result5 = mysqli_query($con,$display);
                    $count=0;
                    while($row3=mysqli_fetch_assoc($result5))
                    {?>
                    <tr>
                    <td><?php echo $row3["Medicinename"]."<br>";?></td>
                    <td><?php echo $row3["Price"]."<br>";?></td>
                    <td><?php echo $row3["Quantity"]."<br>";?></td>
                    <td><?php echo $row3["Total"];?></td></tr><?php
                    $count=$count+$row3["Total"];
                    }
                    
                    ?>
                    <tr>
                    <td>Total : </td>
                    <td colspan="2"><?php echo $count;?></td>
                    </tr>
                    <tr><td colspan="3" align="center"><input type="submit" value="print" name="submit" onclick="window.print()"/></td></tr>
                    <tr><td colspan="3" align="center"><input type="submit" value="savesales" name="submit" /></td></tr>
                    </table></form>
                    <?php

                    $realtableprice="select * from $tablenamepure where Medicinename = '$item' ";
                    $b=mysqli_query($con,$realtableprice);
                    $a=mysqli_fetch_assoc($b);
                    echo $a["Quantity"];
                    
                    
                    $rs=$a["Quantity"]-$quantity;

                    $rsquery="update $tablenamepure set Quantity = $rs where Medicinename = '$med'";
                    mysqli_query($con,$rsquery);

                }


            }
            else
            {
                echo "no data found on";
                echo $item;
            }
        break;
        case 'savesales': 
            {
            
            $tablename=$tablenamepure.'temp';
            $rsquery="drop table $tablename";
            mysqli_query($con,$rsquery);

            
            
            
            echo "data saved";
            }
    }
    
            
            
                
}

?>
<table>
</form>
</table>
</form>
</body>    
</html>
