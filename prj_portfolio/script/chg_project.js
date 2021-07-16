function act_project(id, btnac) {
	let input = document.querySelectorAll("input#a" + id);
	let btnch = document.querySelector("button#a" + id);
	for (let i = 0; i < input.length; i++)
	{
		input[i].disabled = false;	
	}
	btnac.style.display = "none";
	btnch.style.display = "inline-block";
}

function add_mod()
{
	let modal = document.querySelector(".add_modal");
	let bck = document.querySelector(".list");
	let ref_port = document.querySelector(".exit");
	modal.style.display = "block";
	bck.style.filter = "brightness(0.1)";
	ref_port.style.filter = "brightness(0.1)";
}

let bck = document.querySelector(".list");
let modadd = document.querySelector(".add_modal");
let closeBtnadd = document.querySelector(".add_btn_close");
let ref_port = document.querySelector(".exit");
closeBtnadd.onclick = function()
{
	modadd.style.display = "none";
	bck.style.filter = "brightness(1)";
	ref_port.style.filter = "brightness(1)";
}