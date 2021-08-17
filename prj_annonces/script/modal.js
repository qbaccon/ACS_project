function toggle_modal()
{
	const modal_box = document.querySelector("div#modal");
	if (window.getComputedStyle(modal_box, null).getPropertyValue("display") == "none")
		modal_box.style.display = "flex";
	else
		modal_box.style.display = "none";
}