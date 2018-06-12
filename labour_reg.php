<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	   $rowcount = mysqli_query($conn,"select count(*) FROM labour");
	   $row = mysqli_fetch_array($rowcount);
$LID=$row[0]+1;
$fname=$_POST['name'];
$dob=$_POST['dob'];
$Phno=$_POST['phone'];
$adhar=$_POST['Adhar'];
$addr=$_POST['address'];
$crop=$_POST['Crop'];
$rate=$_POST['rate_Per_day'];
$query1="INSERT INTO `labour` VALUES('$LID','$fname','$dob','$Phno','$adhar','$addr','$crop','$rate')";
$res1=mysqli_query($conn,$query1);

if($res1)
{

 echo "<script type='text/javascript'>";
 echo "alert('data inserted')";
echo "</script>";
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
