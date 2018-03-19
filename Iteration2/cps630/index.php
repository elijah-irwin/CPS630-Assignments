<?php include 'headers/indexHeader.php';?>

<div class="container">
	<form action="displayData.php" method="post">
		<select name="artId">
			<option value="0">The Starry Night</option>
			<option value="1">The Creation of Adam</option>
			<option value="2">The Kiss</option>
			<option value="3">Mona Lisa</option>
			<option value="4">The Scream</option>
			<option value="5">Girl with the Pearl Earring</option>
		</select>
		<input type="submit" value="Submit">
	</form>

	<form action="displayData.php" method="post">
		<select name="artistId">
			<option value="0">Vincent Van Gogh</option>
			<option value="1">Michelangelo</option>
			<option value="2">Gustav Klimt</option>
			<option value="3">Leonardo da Vinci</option>
			<option value="4">Edvard Munch</option>
			<option value="5">Johannes Vermeer</option>
		</select>
		<input type="submit" value="Submit">
	</form>

	<form action="displayData.php" method="post">
		<select name="museumId">
			<option value="0">Museum of Modern Art</option>
			<option value="1">Sistine Chapel</option>
			<option value="2">Osterreichische Galerie Belvedere</option>
			<option value="3">Musee du Louvre</option>
			<option value="4">National Gallery</option>
			<option value="5">Mauritshuis</option>
		</select>
		<input type="submit" value="Submit">
	</form>

</div>

<?php include 'headers/indexFooter.php';?>


