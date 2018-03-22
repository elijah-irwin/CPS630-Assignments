<?php
$servername = "teamfortythree.cixx2fhfm88l.us-east-1.rds.amazonaws.com";
$username = "teamfortythree";
$password = "php1234567890";
$dbname = "cpsdb";
$dsn = "mysql:dbname=$cpsdb;host=$servername";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, col1, col2, col3 from test");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
}
catch(PDOException $e) {
    echo "error" . $e -> getMessage();
}

?>
