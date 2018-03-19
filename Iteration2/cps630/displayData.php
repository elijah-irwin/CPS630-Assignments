<?php include 'headers/indexHeader.php'; ?>

<div class="container">
<?php 

$value = $_POST['artId'];

$servername = "localhost";
$username = "root";
$password = "cps630group43";
$dbname = "cps630";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Artworks WHERE ArtworkId=$value";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>";
    echo "<th class='dataHeader'>ArtId</th>";
    echo "<th class='dataHeader'>Photo</th>";
    echo "<th class='dataHeader'>Name</th>";
    echo "<th class='dataHeader'>Artist</th>";
    echo "<th class='dataHeader'>Price</th>";
    echo "<th class='dataHeader'>Description</th>";
    echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='data'>" . $row["ArtworkId"] . "</td>";
        $photo = $row["Photo"]; 
        echo "<td class='data'><img src='$photo' style='width:400px'></td>";
        echo "<td class='data'>" . $row["Name"] . "</td>";
        echo "<td class='data'>" . $row["Artist"] . "</td>";
        echo "<td class='data'>$" . $row["Price"] . "</td>";
        echo "<td class='data'>" . $row["Description"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>

</div>

<?php include 'headers/indexFooter.php'; ?>