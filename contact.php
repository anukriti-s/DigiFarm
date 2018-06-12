<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	  
$name=$_POST['Name'];
$email=$_POST['Email'];
$msg=$_POST['message'];
$query1="INSERT INTO `contact` VALUES('$name','$email','$msg')";
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
