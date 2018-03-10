var mak = new Object();
mak.name = "McKenzie Irwin";
mak.stuNum = "500 697 853";
mak.photo = "assets/doritoResize.jpg";
mak.program = "Computer Science"

var dany = new Object();
dany.name = "Danylo Dotsenko";
dany.stuNum = "500 696 280";
dany.photo = "assets/dany.jpg";
dany.program = "Computer Science"

var maria = new Object();
maria.name = "Maria Poveda";
maria.stuNum = "500 694 400";
maria.photo = "assets/maria.jpg";
maria.program = "Computer Science"

var array = [mak,dany,maria];

// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function displayInfo(value) {
	console.log(value);
	var img = array[value].photo;
	var name = array[value].name;
	var stuNum = array[value].stuNum;
	var prog = array[value].program;
	document.getElementById("photo").src = img;
	document.getElementById("name").innerHTML = "<strong>Name: </strong>" + name;
	document.getElementById("stuNum").innerHTML = "<strong>Student Number: </strong>" + stuNum;
	document.getElementById("program").innerHTML = "<strong>Program: </strong>" + prog;

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
