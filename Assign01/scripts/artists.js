

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
