function toggle_reg_modal()
{
	const html_core = document.querySelector("html");
	const sec_login = document.querySelector("#log_box");
	const modal_box = document.querySelector("div#modal");
	if (window.getComputedStyle(modal_box, null).getPropertyValue("display") == "none")
	{
		modal_box.style.display = "inline-block";
		html_core.style.backgroundColor = "#101010";
		sec_login.style.filter = "brightness(0.1)";
	}
	else
	{
		modal_box.style.display = "none";
		html_core.style.backgroundColor = "#e5e5e5";
		sec_login.style.filter = "brightness(1)";
	}
}

function toggle_contact_mod()
{
	const sec_annonce = document.querySelector("#master_container");
	const modal_box = document.querySelector("div#modal_box");
	if (window.getComputedStyle(modal_box, null).getPropertyValue("display") == "none")
	{
		modal_box.style.display = "inline-block";
		sec_annonce.style.filter = "brightness(0.1)";
	}
	else
	{
		modal_box.style.display = "none";
		sec_annonce.style.filter = "brightness(1)";
	}
}