<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	   $q="truncate table login_details";
	   $res = mysqli_query($conn,$q);
	   
if($res)
{
/*
echo "<script type='text/javascript'>";
 echo "alert('logout successfull')";
echo "</script>";*/
header("Location: http://localhost/farmer_service/home.html");
}
else
{
	echo("Error description: " . mysqli_error($conn));
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo "</script>";
}








?>