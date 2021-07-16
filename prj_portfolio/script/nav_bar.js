function togglenavbar(c)
{
	let nav_sec = document.querySelector(".nav_def_sec");
	let but_open = document.querySelector("#open");
	let but_close = document.querySelector("#close");
	if (c == 'o')
	{
		but_open.style.display = "none";
		but_close.style.display = "block";
		nav_sec.style.display = "flex";
	}
	if (c == 'c')
	{
		but_open.style.display = "block";
		but_close.style.display = "none";
		nav_sec.style.display = "none";
	}
}

function ignite_nav_f(section, nav, l_mod)
{
	if (section.getBoundingClientRect().bottom >= 100)
	{
		if (l_mod)
		{
			nav[0].style.color = "#4860cf";
			nav[1].style.color = "#4860cf";
		}
		else
		{
			nav[0].style.color = "#420909";
			nav[1].style.color = "#420909";
		}
	}
	else
	{
		if (l_mod)
		{
			nav[0].style.color = "#101010";
			nav[1].style.color = "#101010";
		}
		else
		{
			nav[0].style.color = "#e5e5e5";
			nav[1].style.color = "#e5e5e5";
		}
	}
}

function ignite_nav_o(section, nav, l_mod)
{
	if (section.getBoundingClientRect().bottom >= 100 &&
		section.getBoundingClientRect().top <= 100)
	{
		if (l_mod)
		{
			nav[0].style.color = "#4860cf";
			nav[1].style.color = "#4860cf";
		}
		else
		{
			nav[0].style.color = "#420909";
			nav[1].style.color = "#420909";
		}
	}
	else
	{
		if (l_mod)
		{
			nav[0].style.color = "#101010";
			nav[1].style.color = "#101010";
		}
		else
		{
			nav[0].style.color = "#e5e5e5";
			nav[1].style.color = "#e5e5e5";
		}
	}
}

function ignite_nav(section, nav_m, nav_s, nav_p, nav_c, l_mod)
{
	ignite_nav_f(section[1], nav_m, l_mod);
	ignite_nav_o(section[2], nav_s, l_mod);
	ignite_nav_o(section[3], nav_p, l_mod);
	ignite_nav_o(section[4], nav_c, l_mod);
}

let ticking = false;
let l_mod;
let link;
let section = document.querySelectorAll("section");
let nav_m = document.querySelectorAll("#rub_me");
let nav_s = document.querySelectorAll("#rub_skill");
let nav_p = document.querySelectorAll("#rub_project");
let nav_c = document.querySelectorAll("#rub_contact");

window.addEventListener('scroll', function() {
	if (!ticking)
	{
		link = document.querySelector("link");
		l_mod = link.href.search("day")
		if (l_mod >= 0)
			l_mod = 1;
		else
			l_mod = 0;
		window.requestAnimationFrame(function() {
			ignite_nav(section, nav_m, nav_s, nav_p, nav_c, l_mod);
			ticking = false;
		});
	}
	ticking = true;
})