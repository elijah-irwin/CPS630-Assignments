<?php

$databaseHost = 'localhost';
$databaseName = 'myDB';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


if(isset($_POST['update']))
{    
    $id=$_POST['museumid'];
    $photo=$_POST['photo'];
    $name=$_POST['name'];
    $dofc=$_POST['creation'];    
    $loc=$_POST['location'];    
    $ppl=$_POST['ppl'];    
    $history=$_POST['history'];    
    $works=$_POST['works'];    
            
        //updating the table
    $result = "UPDATE museums SET Photo='$photo', Name='$name', DofC='$dofc', Loc='$loc', PplInvolved='$ppl', History='$history', FamousWorks='$works' WHERE MuseumId='$id'";
    $mysqli->query($result);
        //redirectig to the display page. In our case, it is index.php
    header("Location: admin.php");
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM museums WHERE MuseumId=$id");
 
while($res = mysqli_fetch_array($result))
{
    $artid = $res['ArtistId'];
    $photo=$res['Photo'];
    $name=$res['Name'];
    $dofc=$res['DofC'];    
    $loc=$res['Loc'];    
    $ppl=$res['PplInvolved'];    
    $history=$res['History'];    
    $works=$res['FamousWorks']; 
}


?>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Back</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit2.php">
        <table border="0">
            <tr> 
                <td>Museum Id</td>
                <td><input type="text" name="museumid" value=<?php echo $_GET['id'];?>></td>
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
                <td>Date of Creation</td>
                <td><input type="text" name="creation" value="<?php echo $dofc;?>"required></td>
            </tr>
            <tr> 
                <td>Location</td>
                <td><input type="text" name="location" value="<?php echo $loc;?>"required></td>
            </tr>
            <tr> 
                <td>People Involved</td>
                <td><input type="text" name="ppl" value="<?php echo $ppl;?>"required></td>
            </tr>
            <tr> 
                <td>History</td>
                <td><input type="text" name="history" value="<?php echo $history;?>"required></td>
            </tr>
            <tr> 
                <td>Works</td>
                <td><input type="text" name="works" value="<?php echo $works;?>"required></td>
            </tr>
  
            <tr>
            
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

