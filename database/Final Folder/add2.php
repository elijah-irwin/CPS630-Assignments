<?php
//including the database connection file
$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['Submit'])) { 

    $id=$_POST['museumid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $dofc=$_POST['creation'];    
    $loc=$_POST['location'];    
    $ppl=$_POST['ppl'];    
    $history=$_POST['history'];    
    $works=$_POST['works'];     
    
    $result = mysqli_query($mysqli, "INSERT INTO museums(MuseumId,Photo,Name,DofC,Loc,PplInvolved,History,FamousWorks) VALUES('$id','$photo','$name','$dofc', '$loc', '$ppl', '$history', '$works')");
    //$result = "UPDATE artists SET Photo='$photo', Name='$name', DofB='$dofb', PofL='$loc', Genre='$genre', FamousWorks='$works', Description='$description' WHERE ArtistId='$id'";        
        //display success message
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
 
    <form action="add2.php" method="post" name="form1">
        <table border="0">
            <tr> 
                <td>Museum Id</td>
                <td><input type="text" name="museumid" required></td>
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
                <td>Date of Creation</td>
                <td><input type="text" name="creation" required></td>
            </tr>
            <tr> 
                <td>Location</td>
                <td><input type="text" name="location" required></td>
            </tr>
            <tr> 
                <td>People Involved</td>
                <td><input type="text" name="ppl" required></td>
            </tr>
            <tr> 
                <td>Histyory</td>
                <td><input type="text" name="history" required></td>
            </tr>
            <tr> 
                <td>Famous Works</td>
                <td><input type="text" name="works" required></td>
            </tr>
  
            <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

