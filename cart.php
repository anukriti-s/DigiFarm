<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysqli_select_db($conn,'agri_db') or die("unable to connect to database");
	  // $rowcount = mysqli_query($conn,"select count(*) FROM farmer");
	  // $row = mysqli_fetch_array($rowcount);
// Create connection

echo "<h1>Product Details</h1>";
$query1= "select FarID from login_details"; 
  $res1=mysqli_query($conn,$query1);
  $id = mysqli_fetch_array($res1);
$Farid=$id[0];
$sql = "SELECT * FROM purchase where FarID='$Farid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["FarID"]."<br>". " - Name: " . $row["name"]."<br>"." - Quanitity: " . $row["quantity"] ."<br>"." - Rate: " . $row["rate"] ."<br>"."<br>";
    }
} else {
    echo "0 results";
}

echo "<h1>Equipment Details</h1>";
$query2= "select FarID from login_details"; 
  $res2=mysqli_query($conn,$query2);
  $id1 = mysqli_fetch_array($res2);
$Farid1=$id1[0];
$sql1 = "SELECT * FROM eqborrow where FarID='$Farid1'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($ro = $result1->fetch_assoc()) {
        echo "id: " . $ro["FarID"]."<br>". " - Rate: " . $ro["Rate"] ."<br>"." - Days: " . $ro["days"]."<br>"."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>