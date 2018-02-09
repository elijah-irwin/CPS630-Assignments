<!DOCTYPE HTML>  
<html>
    <head>
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet"/>
        
<style>
    .error {
        color: #FF0000;
    }
    body {
font-family: 'Barlow Condensed', sans-serif;
    
  }
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$title = $type = $description = $year = $subject = $location = $commons = $clear = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = test_input($_POST["title"]);

    $description = test_input($_POST["description"]);

    $genre = test_input($_POST["genre"]);

    $subject = test_input($_POST["subject"]);

    $year = test_input($_POST["year"]);

    $location = test_input($_POST["location"]);

    $type = test_input($_POST["type"]);

    $commons = test_input($_POST["commons"]);

    $clear = test_input($_POST["clear"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>EDIT ART WORK</h2>
<form id="main" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Title: <input type="text" name="title" value="<?php echo $title;?>">
  <br><br>
  Description of Artwork: <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
  <br><br>
  Genre: <select header="Choose Genre" input type ="text" name ="genre" selected="<?php echo $genre;?>">
  <option selected="selected">Choose Genre</option>
  <option>Abstract</option>
  <option>Baroque</option>
  <option>Gothic</option>
  <option>Renaissance</option>
  </select>
  <br><br>

  Subject: <select header="Choose Subject" input type ="text" name ="subject" selected="<?php echo $subject;?>">
  <option selected="selected">Choose Subject</option>
  <option>Landscape</option>
  <option>Portrait</option>select
  </select>
  <br><br>
  Year: <input type="text" name="year" value="<?php echo $year;?>">
  <br><br>
  Location: <input type="text" name="location" value="<?php echo $location;?>">
  <br><br>


  <h1> BOTH ELEMENTS BELOW NEED TO BE CENTERED, PLS </h1>
<!-- RADIO BUTTONS ->-->
  Type:
  <input type="radio" name="type" <?php if (isset($type) && $type=="painting") echo "checked";?> value="painting">Painting
  <input type="radio" name="type" <?php if (isset($type) && $type=="sculpture") echo "checked";?> value="sculpture">Sculpture
  <br><br>

  Creative Commons Specification:
  <input type="checkbox" name="commons" <?php if (isset($commons) && $commons=="commercial") echo "checked";?> value="commercial">Commercial
  <input type="checkbox" name="commons" <?php if (isset($commons) && $commons=="non-commercial") echo "checked";?> value="non-commercial">Non-Commercial
  <input type="checkbox" name="commons" <?php if (isset($commons) && $commons=="derivative") echo "checked";?> value="derivative">Derivative Work
  <input type="checkbox" name="commons" <?php if (isset($commons) && $commons=="non-derivative") echo "checked";?> value="non-derivative">Non-Derivative Work
  <br><br>

  <input type="submit" name="submit" value="Submit"> 

  <input type="button" onclick="action.php" value="Clear"/>
  
  
</form>



<?php

echo "<h2>Your Input:</h2>";
echo $title;
echo "<br>";
echo $description;
echo "<br>";
echo $genre;
echo "<br>";
echo $subject;
echo "<br>";
echo $year;
echo "<br>";
echo $location;
echo "<br>";
echo $type;
echo "<br>";
echo $commons;
echo "<br";


?>

</body>
</html>

