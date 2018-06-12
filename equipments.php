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
$days=$_POST['start'];
$type=$_POST['product'];
$q="select Rent_per_Day from equipments";
$result=mysqli_query($conn,$q);
 $price= mysqli_fetch_array($result);
$r1=$price[0];
$rate=((int)$r1*$days);
$query1= "select FarID from farmer where name='$fname'";
  $res1=mysqli_query($conn,$query1);
  
  $id = mysqli_fetch_array($res1);
$Farid=$id[0];
$q2="select EqID from equipments where type='$type'";
$res2=mysqli_query($conn,$q2);
  $id1 = mysqli_fetch_array($res2);
$EqID =$id1[0];
$query1="INSERT INTO `eqborrow` VALUES('$Farid','$EqID','$rate','$days')";
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
