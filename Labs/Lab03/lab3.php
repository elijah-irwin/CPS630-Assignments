<!DOCTYPE HTML>  
<html>
    <head>
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


<h2 style="text-align: center;">EDIT ART WORK</h2><br><br>
<form id="main" method="post" action="">  

<div class="row">
<div class="col-lg-6" style="padding-left:25%; margin:auto;">
  Title: <input type="text" name="title" >
  <br><br>
  Description of Artwork: <br>
  <textarea name="description" rows="5" cols="40"></textarea>
  <br><br>
  Genre: <select header="Choose Genre" input type ="text" name ="genre" >
  <option selected="selected"></option>
  <option>Abstract</option>
  <option>Baroque</option>
  <option>Gothic</option>
  <option>Renaissance</option>
  </select>
  <br><br>

  Subject: <select header="Choose Subject" input type ="text" name ="subject">
  <option selected="selected"></option>
  <option>Landscape</option>
  <option>Portrait</option>select
  </select>
  <br><br>
  Year: <input type="text" name="year">
  <br><br>
  Location: <input type="text" name="location">
  <br><br>
</div>
<div class="col-lg-6" style="margin: auto; padding-right: 25%">
 
<!-- RADIO BUTTONS ->-->
  Type:
  <input type="radio" name="type" value="painting"> Painting
  <input type="radio" name="type" value="sculpture"> Sculpture
  <br><br>

  Creative Commons Specification:
  <br>
  <input type="checkbox" name="commons"  value="commercial"> Commercial
  <input type="checkbox" name="commons"  value="non-commercial"> Non-Commercial <br>
  <input type="checkbox" name="commons"  value="derivative"> Derivative Work
  <input type="checkbox" name="commons"  value="non-derivative"> Non-Derivative Work
  <br><br>
</div>
</div>

<div style="text-align:center; margin: auto;">
  <input type="submit" value="Submit"> 

  <input type="reset" value="Clear" >
 </div> 
  
</form>




<?php
echo "<h2>Your Input:</h2>";
echo $_POST["title"];
echo "<br>";
echo $_POST["description"];
echo "<br>";
echo $_POST["genre"];
echo "<br>";
echo $_POST["subject"];
echo "<br>";
echo $_POST["year"];
echo "<br>";
echo $_POST["location"];
echo "<br>";
echo $_POST["type"];
echo "<br>";
echo $_POST["commons"];
echo "<br";

?>


</body>
</html>