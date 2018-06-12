
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

  $servername = "localhost";  
       $username = "root";  
       $password = "";  
	   $flag=0;
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db ($conn,'agri_db') or die("unable to connect to database");
$uname=$_POST['uid'];
$pwd=$_POST['password'];
$query="select * from farmer";
$res=mysqli_query($conn,$query);
while($row = mysqli_fetch_row($res))
{
  $id = $row[1];
  $tpwd = $row[2];
  $query1= "select FArID from farmer where name=$id";
  $res1=mysqli_query($conn,$query1);
  $row = mysqli_fetch_array($res1);
$farid=$row[0];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location:http://localhost/farmer_service/farmer_home.html");
	$query1="insert into `login_details` VALUES('$farid','$uname','$pwd')";
	$res=mysqli_query($conn,$query1);
}	
/*
else
{
	echo("Error description: ".mysqli_error($conn));
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo "</script>";
}
*/
}
/*
$query="select * from civil_officer_info";
$res=mysql_query($query);


while($row = mysql_fetch_row($res))
{
  $id = $row[0];
  $tpwd = $row[7];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location: http://localhost/RTO_NEW/lost_vehicle_info/civil_officer.html");
	break;
}	
}	
$query="select * from officer_reg";
$res=mysql_query($query);

while($row = mysql_fetch_row($res))
{
  $id = $row[0];
  $tpwd = $row[7];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location: http://localhost/RTO_NEW/offence_reg_form/officer_page.html");
	break;
}	
}	
$query="select * from admin_user_reg";
$res=mysql_query($query,$conn);

while($row = mysql_fetch_row($res))
{
  $id = $row[2];
  $tpwd = $row[11];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	$cdate=date('Y-m-d');
	$dump="insert into user_log values('$uname','$pwd',1,'$cdate')";
	$dres=mysql_query($dump);
	header("Location: http://localhost/RTO_NEW/user_view_form/user_form.php");
	break;
}	
}
if($flag==0)
{
	header("Location: http://localhost/RTO_NEW/Login_form/index.php");
	echo mysql_error($conn);
	
}
  
?>
*/

