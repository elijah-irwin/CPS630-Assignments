<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database
$server = 'localhost';

$user = 'root';

$pass = 'password';

$db = 'myDB';



// Connect to Database

$conn = mysql_connect($server, $user, $pass);
mysql_select_db($db);




// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['ArtistId']) && is_numeric($_GET['ArtistId']))

{

// get id value

$id = $_GET['ArtistId'];



// delete the entry

$result = mysql_query("DELETE FROM artists WHERE ArtistId=$id")

or die(mysql_error());



// redirect back to the view page

header("Location: admin.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: admin.php");

}



?>
