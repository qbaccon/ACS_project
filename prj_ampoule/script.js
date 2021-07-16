function myFunction() {
	// Get the snackbar DIV
	var x = document.getElementById("snackbar");
  
	// Add the "show" class to DIV
	x.className = "show";
  
	// After 3 seconds, remove the show class from DIV
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function add_mod()
{
	let modal = document.querySelector(".modal");
	let bck = document.querySelector(".history");
	modal.style.display = "block";
	bck.style.filter = "brightness(0.1)";
}

let bck = document.querySelector(".history");
let modal = document.querySelector(".modal");
let closeBtn = document.querySelector(".mod_btn_close");
closeBtn.onclick = function()
{
	modal.style.display = "none";
	bck.style.filter = "brightness(1)";
}
window.onclick = function(e)
{
	if (e.target == modal)
	{
		modal.style.display = "none";
		bck.style.filter = "brightness(1)";
	}
}