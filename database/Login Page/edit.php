<?php

$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['update']))
{    
    $id=$_POST['artistid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $dofb=$_POST['birth'];    
    $loc=$_POST['location'];    
    $genre=$_POST['genre'];    
    $works=$_POST['works'];    
    $description=$_POST['description'];    
            
        //updating the table
    $result = "UPDATE artists SET Photo='$photo', Name='$name', DofB='$dofb', PofL='$loc', Genre='$genre', FamousWorks='$works', Description='$description' WHERE ArtistId='$id'";
    $mysqli->query($result);
        //redirectig to the display page. In our case, it is index.php
    header("Location: admin.php");
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM artists WHERE ArtistId=$id");
 
while($res = mysqli_fetch_array($result))
{
    $artid = $res['ArtistId'];
    $photo=$res['Photo'];
    $name=$res['Name'];
    $dofb=$res['DofB'];    
    $loc=$res['PofL'];    
    $genre=$res['Genre'];    
    $works=$res['FamousWorks'];    
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
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Artist Id</td>
                <td><input type="text" name="artistid" value=<?php echo $_GET['id'];?>></td>
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
                <td>Date of Birth</td>
                <td><input type="text" name="birth" value="<?php echo $dofb;?>"required></td>
            </tr>
            <tr> 
                <td>Place of Living</td>
                <td><input type="text" name="location" value="<?php echo $loc;?>"required></td>
            </tr>
            <tr> 
                <td>Genre</td>
                <td><input type="text" name="genre" value="<?php echo $genre;?>"required></td>
            </tr>
            <tr> 
                <td>Famous Works</td>
                <td><input type="text" name="works" value="<?php echo $works;?>"required></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo $description;?>"required></td>
            </tr>
  
            <tr>
            
                <!--<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>-->
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
