<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO datadetails (name, phone, email)
VALUES ('Nithish', '1235476890', 'nithish.kommineni@gmail.com');";
$sql .= "INSERT INTO datadetails (name, phone, email)
VALUES ('Sai chand', '1345617809', 'sai.kommineni@gmail.com');";
$sql .= "INSERT INTO datadetails (name, phone, email)
VALUES ('Riyaz', '1234567890', 'riyaz.shaik@gmail.com');";
$sql .= "INSERT INTO datadetails (name, phone, email)
VALUES ('Bhadri', '1238749889', 'bhadri.narla@gmail.com');";
$sql .= "INSERT INTO datadetails (name, phone, email)
VALUES ('Teja', '1356217890', 'teja.rayapureddy@gmail.com')";


if (mysqli_multi_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
