<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	   $rowcount = mysqli_query($conn,"select count(*) FROM farmer");
	   $row = mysqli_fetch_array($rowcount);
$FarID=$row[0]+1;
$fname=$_POST['name'];
$dob=$_POST['dob'];
$pwd=$_POST['password'];
$Phno=$_POST['phone'];
$adhar=$_POST['Adhar'];
$addr=$_POST['address'];
$query1="INSERT INTO `farmer` VALUES('$FarID','$fname','$pwd','$dob','$Phno','$adhar','$addr')";
$res1=mysqli_query($conn,$query1);

if($res1)
{
/*
echo "<script type='text/javascript'>";
 echo "alert('Registartion successfull')";
echo "</script>";*/
header("Location: http://localhost/farmer_service/farmer_home.html");
}
else
{
	echo("Error description: " . mysqli_error($conn));
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo "</script>";
}








?>
