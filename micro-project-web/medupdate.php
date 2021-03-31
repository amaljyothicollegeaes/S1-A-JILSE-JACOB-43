<?php
session_start();
include("connection.php");
include("function.php");
$userdata= checklogin($con);
$tablenamenotpure=$userdata['email'];
$tablenamepure=preg_replace('/[^a-zA-Z0-9_ -]/s','',$tablenamenotpure);
$table ="select * from $tablenamepure "; 
$result = mysqli_query($con,$table);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $med=$_POST['med'];
    $price=$_POST['price'];
    $quantity=$_POST['Quantity'];
    $tableprice="select Price from $tablenamepure where Medicinename = '$med' ";
    $tablepquantity="select Quantity from $tablenamepure where Medicinename = '$med' ";
    $a=mysqli_query($con,$tableprice);
    $b=mysqli_query($con,$tablepquantity);
    $aa=mysqli_fetch_assoc($a);
    $bb=mysqli_fetch_assoc($b);
    $calprice=$aa["Price"]+$price;
    $calquantity=$bb["Quantity"]+$quantity;
     

    $table1="update $tablenamepure  set Price  = $calprice ,Quantity = $calquantity where Medicinename = '$med' ";
        if($result1=mysqli_query($con,$table1))
        {
        echo $med." Data Added";
        } 
    
    
        
}

?>

<html>
    <style>
    .main
     {
        background: rgb(53, 48, 48);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding:20px;
        border-radius:10px;
     }
     p{
         color:blue;
     }
     label{
         color:red;
     }
    </style>
<body style="background:grey">
<div class="main">
<form name='form1' method='POST'><center><br>
<br><br><br>
<label>Update Stock</label><br><br><br>
<p>Medicine-name:<input type="text" id="med" name="med" required/>
Price:<input type="number"  id="price" name="price" placeholder="Enter '0' if no change" value="0" required/>
Quantity:<input type="number" id="Quantity" name="Quantity" required/></p><br><br>
<input type="submit" value="Enter"></center><br>
</form>
<h5 id="demo"></h5>
<!--
<form name='form2' method='POST'>
    <center><label>Updatation</label><br><br><br>
<p>Medicine-name:<input type="text" id="med1" name="med1" required/>
Price:<input type="number"  id="price1" name="price1" required/>
Quantity:<input type="number" id="Quantity1" name="Quantity1" required/></p><br><br>
<input type="submit" value="Enter"></center>
</form><br><br><br>
<center>-->
</div>
<!--
<a href="index.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;margin:30px;" value="Dashboard"/></a><br>
<a href="index.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;margin:30px;margin-top:0;margin-bottom:0;" value="Dashboard"/></a><br>-->
<br><a href="index.php" ><input type="button" style="color:blue;box-sizing: border-box;width:120px;height:4%;margin:30px;" value="Dashboard"/></a>


</body>    
</html>