var mak = new Object();
mak.name = "McKenzie Irwin";
mak.stuNum = 500697853;
mak.photo = "assets/doritoResize.jpg";
mak.program = "Computer Science"

var dany = new Object();
dany.name = "Dany";
dany.stuNum = 500697853;
dany.photo = "http://i.imgur.com/qK42fUu.jpg";
dany.program = "Computer Science"

var maria = new Object();
maria.name = "Maria";
maria.stuNum = 500697853;
maria.photo = "http://i.imgur.com/qK42fUu.jpg";
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
	document.getElementById("name").innerHTML = "Name: " + name;
	document.getElementById("stuNum").innerHTML = "Student Number: " + stuNum;
	document.getElementById("program").innerHTML = "Program: " + prog;

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
