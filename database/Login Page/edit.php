<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($ArtistId, $Photo, $Name, $DofB, $PofL, $Genre, $FamousWorks, $Description)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $ArtistId; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $ArtistId; ?></p>

<strong>Photo: *</strong> <input type="text" name="firstname" value="<?php echo $Photo; ?>" required><br/>

<strong>Name: *</strong> <input type="text" name="lastname" value="<?php echo $Name; ?>" required><br/>

<strong>Date of Birtb: *</strong> <input type="text" name="birth" value="<?php echo $DofB; ?>" required><br/>

<strong>Place of Living: *</strong> <input type="text" name="living" value="<?php echo $PofL; ?>" required><br/>

<strong>Genre: *</strong> <input type="text" name="genre" value="<?php echo $Genre; ?>" required><br/>

<strong>Famous Works: *</strong> <input type="text" name="works" value="<?php echo $FamousWorks; ?>" required><br/>

<strong>Description: *</strong> <input type="text" name="description" value="<?php echo $Description; ?>" required><br/>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}







// connect to the database

$server = 'localhost';

$user = 'root';

$pass = 'cps630group43';

$db = 'cps630';



// Connect to Database

$conn = new mysqli($server, $user, $pass, $db);



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$photo = mysql_real_escape_string(htmlspecialchars($_POST['Photo']));

$name = mysql_real_escape_string(htmlspecialchars($_POST['Name']));

$dofb = mysql_real_escape_string(htmlspecialchars($_POST['DofB']));

$pofl = mysql_real_escape_string(htmlspecialchars($_POST['PofL']));

$genre = mysql_real_escape_string(htmlspecialchars($_POST['Genre']));

$works = mysql_real_escape_string(htmlspecialchars($_POST['FamousWorks']));

$description = mysql_real_escape_string(htmlspecialchars($_POST['Description']));


// check that firstname/lastname fields are both filled in

if ($Name == '' || $Description == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($ArtistId, $Photo, $Name, $DofB, $PofL, $Genre, $FamousWorks, $Description);

}

else

{

// save the data to the database

mysql_query("UPDATE names SET Photo='$photo', Name='$name', DofB='$dofb', PofL='$pofl', Genre='$genre', FamousWorks='$works', Description='$description' WHERE id='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: admin.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM artists WHERE ArtistId=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$ArtistId = $row['ArtistId'];

$Photo = $row['Photo'];

$Name = $row['Name'];

$DofB = $row['DofB'];

$PofL = $row['PofL'];

$Genre = $row['Genre'];

$FamousWorks = $row['FamousWorks'];

$Description = $row['Description'];




// show form
renderForm($ArtistId, $Photo, $Name, $DofB, $PofL, $Genre, $FamousWorks, $Description)


}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>
