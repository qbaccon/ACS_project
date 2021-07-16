function act_project(id, btnac) {
	let input = document.querySelectorAll("input.a" + id);
	let text_area = document.querySelector("textarea.a" + id);
	let btnch = document.querySelector("button#a" + id);
	let divch = document.querySelector("div.chg" + id);
	let divact = document.querySelector("div#act" + id);
	for (let i = 0; i < input.length; i++)
	{
		input[i].disabled = false;	
	}
	text_area.disabled = false;
	btnac.style.display = "none";
	divact.style.display = "none";
	btnch.style.display = "inline-block";
	divch.style.display = "flex";
}

function add_mod()
{
	let modal = document.querySelector(".add_modal");
	let bck = document.querySelector(".list");
	let ref_home = document.querySelector(".exit");
	modal.style.display = "block";
	bck.style.filter = "brightness(0.1)";
	ref_home.style.filter = "brightness(0.1)";
}

let modadd = document.querySelector(".add_modal");
let bck = document.querySelector(".list");
let ref_home = document.querySelector(".exit");
let closeBtnadd = document.querySelector(".add_btn_close");
closeBtnadd.onclick = function()
{
	modadd.style.display = "none";
	bck.style.filter = "brightness(1)";
	ref_home.style.filter = "brightness(1)";
}