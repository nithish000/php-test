<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, phone, email FROM datadetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "name: " . $row["name"]." phone: " . $row["phone"]. "email:" . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
