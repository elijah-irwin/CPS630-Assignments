var sn = new Object();
sn.photo = "../assets/starryNight.jpg"
sn.name = "Starry Night";
sn.artist = "Vincent Van Gogh";
sn.dofp = "1889";
sn.dimensions  = "73.7cm x 92.1cm";
sn.curlocation = "Museum of Modern Art";
sn.medium = "Oil On Canvas"
sn.genre = "Post-Impressionism, Modern";

var adam = new Object();
adam.photo = "../assets/adam.jpg";
adam.name = "The Creation of Adam";
adam.artist = "Michelangelo";
adam.dofp = "1508-1512";
adam.dimensions  = "2.8m x 5.7m";
adam.curlocation = "Sistine Chapel";
adam.medium = "Paint, Plaster"
adam.genre = "Renaissance";

var kiss = new Object();
kiss.photo = "../assets/kiss.jpg";
kiss.name = "The Kiss";
kiss.artist = "Gustav Klimt";
kiss.dofp = "1907-1908";
kiss.dimensions  = "1.8m x 1.8m";
kiss.curlocation = "Osterreichische <br> Galerie Belvedere";
kiss.medium = "Oil On Canvas"
kiss.genre = "Symbolism, Modern";

var ml = new Object();
ml.photo = "../assets/monalisaResize.jpg";
ml.name = "Mona Lisa";
ml.artist = "Leonardo da Vinci";
ml.dofp = "1503-(1506-1517)";
ml.dimensions  = "77cm x 53cm";
ml.curlocation = "Musée du Louvre, Paris";
ml.medium = "Oil On Panel"
ml.genre = "Portrait";

var s = new Object();
s.photo = "../assets/screamResize.jpg";
s.name = "The Scream";
s.artist = "Edvard Munch";
s.dofp = "1893";
s.dimensions  = "91cm x 73.5cm";
s.curlocation = "National Gallery, Norway";
s.medium = "Oil, Tempera, Pastel, <br> Crayon on Cardboard";
s.genre = "Expressionism";

var pearl = new Object();
pearl.photo = "../assets/final.jpg";
pearl.name = "Girl with a Pear Earring";
pearl.artist = "Johannes Vermeer";
pearl.dofp = "1665";
pearl.dimensions  = "44.5cm x 39cm";
pearl.curlocation = "Mauritshuis, Netherlands";
pearl.medium = "Oil On Canvas";
pearl.genre = "Portrait";



var array = [sn,adam,kiss,ml,s,pearl];

// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function displayInfo(value) {
	var img         = array[value].photo;
	var name        = array[value].name;
	var artist      = array[value].artist;
	var dofp        = array[value].dofp;
	var dimensions  = array[value].dimensions;
	var curlocation = array[value].curlocation;
	var medium      = array[value].medium;
	var genre       = array[value].genre;
	document.getElementById("photo").src = img;
	document.getElementById("name").innerHTML = "<strong>Name: </strong>" + name;
	document.getElementById("artist").innerHTML = "<strong>Artist: </strong>" + artist;
	document.getElementById("dofp").innerHTML = "<strong>Date of Production: </strong>" + dofp;
	document.getElementById("dimensions").innerHTML = "<strong>Dimensions: </strong>" + dimensions;
	document.getElementById("curlocation").innerHTML = "<strong>Location: </strong>" + curlocation;
	document.getElementById("medium").innerHTML = "<strong>Medium: </strong>" + medium;
	document.getElementById("genre").innerHTML = "<strong>Genre: </strong>" + genre;

    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
