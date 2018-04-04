<?php

$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['update']))
{    
    $id=$_POST['artworkid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $artist=$_POST['artist'];    
    $price=$_POST['price'];    
    $description=$_POST['description'];    
            
        //updating the table
    $result = "UPDATE artworks SET Photo='$photo', Name='$name', Artist='$artist', Price='$price', Description='$description' WHERE ArtworkId='$id'";
    $mysqli->query($result);
        //redirectig to the display page. In our case, it is index.php
    header("Location: admin.php");
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM artworks WHERE ArtworkId=$id");
 
while($res = mysqli_fetch_array($result))
{
    $artid = $res['ArtworkId'];
    $photo=$res['Photo'];
    $name=$res['Name'];
    $artist=$res['Artist'];    
    $price=$res['Price'];    
    $description=$res['Description']; 
}


?>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Back</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit1.php">
        <table border="0">
            <tr> 
                <td>Artwork Id</td>
                <td><input type="text" name="artworkid" value=<?php echo $_GET['id'];?>></td>
            </tr>
            <tr> 
                <td>Photo</td>
                <td><input type="text" name="photo" value="<?php echo $photo;?>"required></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"required></td>
            </tr>
            <tr> 
                <td>Artist</td>
                <td><input type="text" name="artist" value="<?php echo $artist;?>"required></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $price;?>"required></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo $description;?>"required></td>
            </tr>
  
            <tr>
            
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

