function open_modal(id)
{
	const body = document.querySelector("section#home_page");
	const foot = document.querySelector("footer");
	const mod = document.querySelector("#mod" + id);
	if (screen.width > 950)
		mod.style.display = "grid";
	else
		mod.style.display = "flex";
		foot.style.filter = "brightness(0.1)";
		body.style.filter = "brightness(0.1)";
	}

function close_modal(id)
{
	const body = document.querySelector("section#home_page");
	const foot = document.querySelector("footer");
	const mod = document.querySelector("#mod" + id);
	mod.style.display = "none";
	foot.style.filter = "brightness(1)";
	body.style.filter = "brightness(1)";
}