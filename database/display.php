<?php
/*
$servername = "teamfortythree.cixx2fhfm88l.us-east-1.rds.amazonaws.com";
$username = "teamfortythree";
$password = "php1234567890";
$dbname = "teamfortythree";
 */

$dbhost = $_SERVER['teamfortythree.cixx2fhfm88l.us-east-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['teamfortythree'];
$dbpass = $_SERVER['php1234567890'];
$dbuser = $_SERVER['teamfortythree'];


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, col1, col2, col3 FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["col1"]." ".$row["col2"]. " " .$row["col3"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 


