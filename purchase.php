<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	  // $rowcount = mysqli_query($conn,"select count(*) FROM farmer");
	  // $row = mysqli_fetch_array($rowcount);
$fname=$_POST['name'];
$product=$_POST['product'];
$quant=$_POST['quantity'];
$q="select PID from products where name='$product'";
$result=mysqli_query($conn,$q);
 $price= "select rate from products where name='$product'";
$r1=$price[0];
$rate=((int)$r1*$quant);
$query1= "select FarID from farmer where name='$fname'";
  $res1=mysqli_query($conn,$query1);
  $id = mysqli_fetch_array($res1);
$Farid=$id[0];

$query1="INSERT INTO `purchase` VALUES('$Farid','$fname','$quant','$rate')";
$res1=mysqli_query($conn,$query1);

if($res1)
{
/*
echo "<script type='text/javascript'>";
 echo "alert('Registartion successfull')";
echo "</script>";*/
header("Location: http://localhost/farmer_service/index.html");
}
else
{
	echo("Error description: " . mysqli_error($conn));
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo "</script>";
}








?>
