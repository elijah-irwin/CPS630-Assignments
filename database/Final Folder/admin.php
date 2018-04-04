<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php

$server = 'localhost';

$user = 'root';

$pass = 'password';

$db = 'myDB';



// Connect to Database

$conn = new mysqli($server, $user, $pass, $db);
$artists = mysqli_query($conn, "SELECT * FROM artists");
$museums = mysqli_query($conn, "SELECT * FROM museums");
$works = mysqli_query($conn, "SELECT * FROM artworks");
$cart = mysqli_query($conn, "SELECT * FROM shoppingcart");

 
 
// display data in table



echo "<h2>Artists</h2>";
echo "<table border='1' cellpadding='10'>";
  
echo "<tr> <th>ID</th> <th>Photo</th> <th>Artists Name</th> <th>Date of Birth</th> <th>Place of Living</th> <th>Genre</th> <th>Famous Works</th> <th>Description</th> <th>Edit</th> <th>Add</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $artists )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['ArtistId'] . '</td>';

echo '<td>' . $row['Photo'] . '</td>';

echo '<td>' . $row['Name'] . '</td>';

echo '<td>' . $row['DofB'] . '</td>';

echo '<td>' . $row['PofL'] . '</td>';

echo '<td>' . $row['Genre'] . '</td>';

echo '<td>' . $row['FamousWorks'] . '</td>';

echo '<td>' . $row['Description'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['ArtistId'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['ArtistId'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";
echo "<p><a href='add.php'>Add a new record</a></p>";


echo "<h2>Artworks</h2>";


echo "<table border='1' cellpadding='10' style='display:inline-block'>";

echo "<tr> <th>ID</th> <th>Photo</th> <th>Name of Artwork</th> <th>Artist Name</th> <th>Price</th> <th>Description</th> <th>Edit</th> <th>Add</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $works )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['ArtworkId'] . '</td>';

echo '<td>' . $row['Photo'] . '</td>';

echo '<td>' . $row['Name'] . '</td>';

echo '<td>' . $row['Artist'] . '</td>';

echo '<td>' . $row['Price'] . '</td>';

echo '<td>' . $row['Description'] . '</td>';

echo '<td><a href="edit1.php?id=' . $row['ArtworkId'] . '">Edit</a></td>';

echo '<td><a href="delete1.php?id=' . $row['ArtworkId'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";
echo "<p><a href='add1.php'>Add a new record</a></p>";

echo "<h2>Museums</h2>";

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Photo</th> <th>Name</th> <th>Date of Construction</th> <th>Location</th> <th>People Involved</th> <th>History</th> <th>Famous Works</th> <th>Edit</th> <th>Add</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $museums )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['MuseumId'] . '</td>';

echo '<td>' . $row['Photo'] . '</td>';

echo '<td>' . $row['Name'] . '</td>';

echo '<td>' . $row['DofC'] . '</td>';

echo '<td>' . $row['Loc'] . '</td>';

echo '<td>' . $row['PplInvolved'] . '</td>';

echo '<td>' . $row['History'] . '</td>';

echo '<td>' . $row['FamousWorks'] . '</td>';

echo '<td><a href="edit2.php?id=' . $row['MuseumId'] . '">Edit</a></td>';

echo '<td><a href="delete2.php?id=' . $row['MuseumId'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";
echo "<p><a href='add2.php'>Add a new record</a></p>";
echo "<h2>Shopping Cart</h2>";

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Photo</th> <th>Name</th> <th>Price</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $cart )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['ArtworkId'] . '</td>';

echo '<td>' . $row['Photo'] . '</td>';

echo '<td>' . $row['Name'] . '</td>';

echo '<td>' . $row['Price'] . '</td>';

echo "</tr>";

}



// close table>

echo "</table>";

 
?>
 

</body>

</html>

