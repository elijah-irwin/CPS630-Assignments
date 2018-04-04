<?php
//including the database connection file
$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['Submit'])) { 

    $id=$_POST['artworkid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $artist=$_POST['artist'];    
    $price=$_POST['price'];    
    $description=$_POST['description'];     
    
    $result = mysqli_query($mysqli, "INSERT INTO artworks(ArtworkId,Photo,Name,Artist,Price,Description) VALUES('$id','$photo','$name','$artist','$price','$description')");
    echo "<font color='green'>Data added successfully.";
    
}
?>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
 
    <form action="add1.php" method="post" name="form1">
        <table border="0">
            <tr> 
                <td>Artwork Id</td>
                <td><input type="text" name="artworkid" required></td>
            </tr>
            <tr> 
                <td>Photo</td>
                <td><input type="text" name="photo" required></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr> 
                <td>Artist</td>
                <td><input type="text" name="artist" required></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="number" name="price" required></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="description" required></td>
            </tr>
  
            <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

