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

echo "<h1>Labour Details</h1>";
$sql = "SELECT * FROM Labour";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Labour id: " . $row["LID"]."<br>". " - Name: " . $row["Name"]."<br>"." - Date of Birth: " . $row["DOB"] ."<br>"." - Phone number: " . $row["PhoneNo"] ."<br>"." - Address: " . $row["Address"]."<br>"." - Crop: " . $row["Crop"]."<br>"." - Rate_Per_Day: " . $row["Rate_per_Day"]."<br>"."<br>";
    }
} else {
    echo "0 results";
}