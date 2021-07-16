function togglelight(c)
{
	let link = document.querySelector("link");
	let token_nb_open = document.querySelector(".nav_hide_tog #open img");
	let token_nb_close = document.querySelector(".nav_hide_tog #close img");
	if (c == 'n')
	{
		token_nb_open.src = "pctr/menu_but_open.gif";
		token_nb_close.src = "pctr/menu_but_close.gif";
		link.href = "style/index_night.css";
	}
	if (c == 'd')
	{
		token_nb_open.src = "pctr/menu_but_openday.gif";
		token_nb_close.src = "pctr/menu_but_closeday.gif";
		link.href = "style/index_day.css";
	}
}