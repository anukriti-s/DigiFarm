<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "agri_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
<h1>Product Details</h1>
$query1= "select FarID from login_details"; 
  $res1=mysqli_query($conn,$query1);
  $id = mysqli_fetch_array($res1);
$Farid=$id[0];
$sql = "SELECT * FROM purchase where FarID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["FarID"]. " - Name: " . $row["name"]." - Quanitityy: " . $row["quantity"] ." - Rate: " . $row["rate"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

<h1>Equipment Details</h1>
$query1= "select FarID from login_details"; 
  $res1=mysqli_query($conn,$query1);
  $id = mysqli_fetch_array($res1);
$Farid=$id[0];
$sql = "SELECT * FROM eqborrow where FarID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["FarID"]. " - Equipment ID: " . $row["EqID"]." - Rate: " . $row["rate"] ." - Days: " . $row["days"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>