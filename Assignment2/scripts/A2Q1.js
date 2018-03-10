var sn = new Object();
sn.photo = "../assets/starryNight.jpg"
sn.name = "The Starry Night";
sn.artist = "Vincent Van Gogh";
sn.dofp = "1889";
sn.dimensions  = "73.7cm x 92.1cm";
sn.curlocation = "Museum of Modern Art";
sn.medium = "Oil On Canvas"
sn.genre = "Post-Impressionism, Modern";
sn.description = "Painted in June 1889, it depicts the view from the east-facing window of his asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of an idealized village.";
sn.price = "$15,000"

var adam = new Object();
adam.photo = "../assets/adam.jpg";
adam.name = "The Creation of Adam";
adam.artist = "Michelangelo";
adam.dofp = "1508-1512";
adam.dimensions  = "2.8m x 5.7m";
adam.curlocation = "Sistine Chapel";
adam.medium = "Paint, Plaster"
adam.genre = "Renaissance";
adam.description = "It illustrates the Biblical creation narrative from the Book of Genesis in which God gives life to Adam, the first man. ";
adam.price = "$20,000"

var kiss = new Object();
kiss.photo = "../assets/kiss.jpg";
kiss.name = "The Kiss";
kiss.artist = "Gustav Klimt";
kiss.dofp = "1907-1908";
kiss.dimensions  = "1.8m x 1.8m";
kiss.curlocation = "Osterreichische <br> Galerie Belvedere";
kiss.medium = "Oil On Canvas"
kiss.genre = "Symbolism, Modern";
kiss.description = "The painting depicts a couple embracing one another, their bodies entwined in elaborate robes decorated in a style influenced by the contemporary Art Nouveau style and the organic forms of the earlier Arts and Crafts movement. ";
kiss.price = "$18,000"

var ml = new Object();
ml.photo = "../assets/monalisaResize.jpg";
ml.name = "Mona Lisa";
ml.artist = "Leonardo da Vinci";
ml.dofp = "1503-(1506-1517)";
ml.dimensions  = "77cm x 53cm";
ml.curlocation = "Musee du Louvre, Paris";
ml.medium = "Oil On Panel"
ml.genre = "Portrait";
ml.description = "The painting is thought to be a portrait of Lisa Gherardini, the wife of Francesco del Giocondo.";
ml.price = "$30,000"

var s = new Object();
s.photo = "../assets/screamResize.jpg";
s.name = "The Scream";
s.artist = "Edvard Munch";
s.dofp = "1893";
s.dimensions  = "91cm x 73.5cm";
s.curlocation = "National Gallery, Norway";
s.medium = "Oil, Tempera, Pastel, <br> Crayon on Cardboard";
s.genre = "Expressionism";
s.description = "The works show a figure with an agonized expression against a landscape with a tumultuous orange sky.";
s.price = "$45,000"

var pearl = new Object();
pearl.photo = "../assets/final.jpg";
pearl.name = "Girl with a Pearl Earring";
pearl.artist = "Johannes Vermeer";
pearl.dofp = "1665";
pearl.dimensions  = "44.5cm x 39cm";
pearl.curlocation = "Mauritshuis, Netherlands";
pearl.medium = "Oil On Canvas";
pearl.genre = "Portrait";
pearl.description = "It is a tronie of a girl wearing a headscarf and a pearl earring. ";
pearl.price = "$21,000"

var array = [sn,adam,kiss,ml,s,pearl];


// When the user clicks the button,
function displayInfo(value) {
	var img         = array[value].photo;
	var name        = array[value].name;
	var description = array[value].description;
	var price		= array[value].price;

	document.getElementById("photo").src = img;
	document.getElementById("name").innerHTML = "<strong>Name: </strong>" + name;
	document.getElementById("description").innerHTML = "<strong>Description: </strong>" + description;
	document.getElementById("price").innerHTML = "<strong>Price: </strong>" + price;
	
}

