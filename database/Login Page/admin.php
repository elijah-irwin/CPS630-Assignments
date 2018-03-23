<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php

$server = 'localhost';

$user = 'root';

$pass = 'password';

$db = 'myDB';



// Connect to Database

$conn = new mysqli($server, $user, $pass, $db);
$result = mysqli_query($conn, "SELECT * FROM names");



// display data in table




echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Edit</th> <th>Add</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>
<p><a href="add.php">Add a new record</a></p>



</body>

</html>

