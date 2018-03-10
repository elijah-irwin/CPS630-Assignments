var ldv = new Object();
ldv.photo = "../assets/ldv.jpg"
ldv.name = "Leonardo Da Vinci";
ldv.dofb = "<br>April 15, 1452 - May 2, 1519";
ldv.location = "Italy";
ldv.genre = "High Renaissance";
ldv.famousWorks = "<br>Mona Lisa,<br>The Last Supper,<br>The Vitruvian Man";

var em = new Object();
em.photo = "../assets/em.jpg"
em.name = "Edvard Munch";
em.dofb = "<br>Dec. 12, 1863 - Jan. 23, 1944";
em.location = "Norway";
em.genre = "<br>Expressionism, Symbolism";
em.famousWorks = "<br>The Scream,<br>Madonna,<br>The Sick Child";

var klimt = new Object();
klimt.photo = "../assets/klimt.jpg";
klimt.name = "Gustav Klimt";
klimt.dofb = "<br>July 14, 1862 - Feb. 6, 1918";
klimt.location = "Austria";
klimt.genre = "<br>Symbolism, Art Nouveau";
klimt.famousWorks = "<br>The Kiss,<br>Danae,<br>Portrait of Adele Bloch-Bauer I";

var jv = new Object();
jv.photo = "../assets/jv.jpg";
jv.name = "Johannes Vermeer";
jv.dofb = "<br>Oct. 31, 1632 - Dec. 15, 1675";
jv.location = "Netherlands";
jv.genre = "<br>Dutch Golden Age, Baroque";
jv.famousWorks = "<br>The Procuress,<br>The Little Street,<br>View of Delft";

var vvg = new Object();
vvg.photo = "../assets/vvg.jpg";
vvg.name = "Vincent Van Gogh";
vvg.dofb = "<br>March 30, 1853 - July 29, 1890";
vvg.location = "Netherlands";
vvg.genre = "<br>Post-Impressionism";
vvg.famousWorks = "<br>The Starry Night,<br>Sorrow,<br>Sunflowers";

var m = new Object();
m.photo = "../assets/m3.jpg";
m.name = "Michelangelo";
m.dofb = "<br>March 6, 1475";
m.location = "Italy";
m.genre = "<br>High Renaissance";
m.famousWorks = "<br>The Creation of Adam,<br>David,<br>The Last Judgement";

var array = [ldv,em,klimt,jv,vvg,m];

// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function displayInfo(value) {
	console.log(value);
	var img = array[value].photo;
	var name = array[value].name;
	var dofb = array[value].dofb;
	var location = array[value].location;
	var genre = array[value].genre;
	var famousWorks = array[value].famousWorks;
	document.getElementById("photo").src = img;
	document.getElementById("name").innerHTML = "<strong>Name: </strong>" + name;
	document.getElementById("dofb").innerHTML = "<strong>Date of Birth: </strong>" + dofb;
	document.getElementById("location").innerHTML = "<strong>Place of Living: </strong>" + location;
	document.getElementById("genre").innerHTML = "<strong>Genre: </strong>" + genre;
	document.getElementById("famousWorks").innerHTML = "<strong>Famous Works: </strong>" + famousWorks;

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
