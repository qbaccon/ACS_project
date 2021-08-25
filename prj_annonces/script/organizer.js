function enbl_input(id)
{
	const input = document.querySelectorAll("div.annonce_box input#a" + id);
	const input_ta = document.querySelector("div.annonce_box textarea#a" + id);
	const input_slct = document.querySelectorAll("div.annonce_box select#a" + id);
	const btn_enbl = document.querySelector("div.annonce_box div#enbl" + id);
	const btn_chg = document.querySelector("div.annonce_box div#chg" + id);
	const other_btn = document.querySelectorAll("div.annonce_box div.enbl button, div.annonce_box div.del button");
	input.forEach($elem => {
		$elem.disabled = false;
	});
	input_slct.forEach($elem => {
		$elem.disabled = false;
	});
	other_btn.forEach($elem => {
		$elem.disabled = true;
	})
	input_ta.disabled = false;
	btn_enbl.style.display = "none";
	btn_chg.style.display = "flex";
}