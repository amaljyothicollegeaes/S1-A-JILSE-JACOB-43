<?php
session_start();
include("function.php");
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="microproject";
$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $password=$_POST['password'];
    $mail=$_POST['mail'];
    
    if(($mail != "")&&($password != ""))
    {
        $query = "select password,email,id from login where email = '$mail' and  password = '$password' limit 1";
        $result = mysqli_query($con,$query);
        if($result)
        {
          if(mysqli_num_rows($result)>0)
          {
            $data = mysqli_fetch_assoc($result);
            if($data['password'] == $password &&  $data['email'] == $mail)
            {
              $_SESSION['id']=$data['id'];
              header("Location: index.php");
            }
          }
        }
    }
    else
    {
        echo "wrong password";
    }
}

?>

<html>
    <head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">

      <script language="javascript" type="text/javascript">
        function sub()
        {
        var   mail=document.getElementById("mail").value;
        var   password=document.getElementById("password").value;
        if(document.getElementById(id="mail").value.length == 0)
            {
                document.getElementById("demo").innerHTML = 'Enter your E-mail ID ';
            }
            else
            {
              if(document.getElementById(id="password").value == '')
              {
                document.getElementById("demo").innerHTML = 'Please enter password';
              }
              else
              {
              if(document.getElementById(id="password").value.length < 8)
              {    
                document.getElementById("demo").innerHTML = 'Password must contain atleast 8 letters';
              }}
        }
              
            }
        
      </script>

    </head>
<body>
    <div class="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>LOGIN HERE</h1>
        <form method="POST" >
         <p>E-Mail:</p><input type="mail" id="mail" name="mail" placeholder="Enter Email " pattern=".{10,}"  required/>
         <p>Password:</p><input type="password" id="password" name="password" placeholder="Password" pattern=".{8,}" required/>
         <center><h4 style="color:blue" id="demo"></h4></center>
         <center><input type="submit" value="Login" onclick="sub()"></center>
        </form>
        <center><a href="">Forgot password ?</a>
        <a href="register.php">Don't have an account ?</a></center>
    </div>
</body>
</html>
