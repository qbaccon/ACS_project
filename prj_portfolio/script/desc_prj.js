let text_block = document.querySelectorAll("#prj_text");
let text = document.querySelectorAll("#prj_text #text");

for (let i = 0; i < text.length; i++)
{
	text_block[i].addEventListener("mouseover", function(e) {
		text[i].style.display = "block";
	});
	text_block[i].addEventListener("mouseout", function(e) {
		text[i].style.display = "none";
	});
}