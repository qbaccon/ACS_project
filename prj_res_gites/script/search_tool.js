function search()
{
	const bdy = document.querySelector("section#home_page");
	const s_bed = document.querySelector("#filter input#nb_bed").value;
	const s_bath = document.querySelector("#filter input#nb_bath").value;
	const s_where = document.querySelector("#filter input#where").value;
	const s_price = document.querySelector("#filter input#price").value;
	const modal = document.querySelectorAll("#mod_block .modal");
	const gbox = document.querySelectorAll(".gite_dspl .gite_box");
	let tmp_data = [5];
	let tmp_gbox;
	let off;
	if (s_bed || s_bath || s_where || s_price)
	{
		let i = 0;
		while (gbox[i])
		{
			gbox[i].style.display = "flex";
			i++;
		}
		let j = 0;
		let cnt = 0;
		while (modal[j])
		{
			off = 0;
			tmp_data[0] = modal[j].id;
			tmp_data[1] = document.querySelector("#" + tmp_data[0] + " #space p").textContent;
			tmp_data[1] = tmp_data[1].split(' ');
			tmp_data[2] = tmp_data[1][5];
			tmp_data[1] = tmp_data[1][1];
			tmp_data[3] = document.querySelector("#" + tmp_data[0] + " #geoloc p").textContent;
			tmp_data[4] = document.querySelector("#" + tmp_data[0] + " #price p").textContent;
			tmp_data[4] = tmp_data[4].split(' ');
			tmp_data[4] = tmp_data[4][1];
			if (s_bed && (Number(tmp_data[1]) < Number(s_bed)))
			{
				tmp_gbox = document.querySelector("#box" + tmp_data[0].substr(3, 1));
				tmp_gbox.style.display = "none";
				off = 1;
			}
			if (s_bath && (Number(tmp_data[2]) < Number(s_bath)))
			{
				tmp_gbox = document.querySelector("#box" + tmp_data[0].substr(3, 1));
				tmp_gbox.style.display = "none";
				off = 1;
			}
			if (s_where && (tmp_data[3].search(s_where) < 0))
			{
				tmp_gbox = document.querySelector("#box" + tmp_data[0].substr(3, 1));
				tmp_gbox.style.display = "none";
				off = 1;
			}
			if (s_price && (Number(tmp_data[4]) > Number(s_price)))
			{
				tmp_gbox = document.querySelector("#box" + tmp_data[0].substr(3, 1));
				tmp_gbox.style.display = "none";
				off = 1;
			}
			if (off)
				cnt++;
			j++;
		}
		if (j == cnt)
			bdy.style.height = "98vh";
		else
			bdy.style.height = "auto";
	}
	else
	{
		let h = 0;
		while (gbox[h])
		{
			gbox[h].style.display = "flex";
			h++;
		}
	}
}