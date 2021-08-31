function toggle_nav_menu()
{
	const nav_menu = document.querySelector("div#nav_menu");
	const link = document.querySelectorAll("div#nav_menu a.link_page");
	if (window.getComputedStyle(nav_menu, null).getPropertyValue("flex-direction") == "row")
	{
		nav_menu.style.flexDirection = "column";
		link.forEach(item => {
			item.style.display = "inline";
		});
	}
	else
	{
		nav_menu.style.flexDirection = "row";
		link.forEach(item => {
			item.style.display = "none";
		});
	}
}