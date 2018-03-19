<?php
$servername = "teamforthythree";
$username = "teamfortythree";
$password = "php1234567890";

$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
