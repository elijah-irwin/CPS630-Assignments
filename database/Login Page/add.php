<?php
//including the database connection file
$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['Submit'])) { 

    $id=$_POST['artistid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $dofb=$_POST['birth'];    
    $loc=$_POST['location'];    
    $genre=$_POST['genre'];    
    $works=$_POST['works'];    
    $description=$_POST['description'];     
    
    $result = mysqli_query($mysqli, "INSERT INTO artists(ArtistId,Photo,Name,DofB,PofL,Genre,FamousWorks,Description) VALUES('$id','$photo','$name','$dofb', '$loc', '$genre', '$works', '$description')");
    //$result = "UPDATE artists SET Photo='$photo', Name='$name', DofB='$dofb', PofL='$loc', Genre='$genre', FamousWorks='$works', Description='$description' WHERE ArtistId='$id'";        
        //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";
    
}
?>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table border="0">
            <tr> 
                <td>Artist Id</td>
                <td><input type="text" name="artistid" required></td>
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
                <td>Date of Birth</td>
                <td><input type="text" name="birth" required></td>
            </tr>
            <tr> 
                <td>Place of Living</td>
                <td><input type="text" name="location" required></td>
            </tr>
            <tr> 
                <td>Genre</td>
                <td><input type="text" name="genre" required></td>
            </tr>
            <tr> 
                <td>Famous Works</td>
                <td><input type="text" name="works" required></td>
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
