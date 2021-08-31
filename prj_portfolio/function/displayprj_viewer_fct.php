<?php

function display($res)
{
	foreach($res as $key => $value)
	{
		if ($value['display'] == 1)
		{
			echo "<div class='prj_block' style='background-image: url(" . '"' . "pctrprj/" . $value["pctr_name"] . "')'>";
			echo "<div id='prj_text'>";
			echo "<p id='subtitle'>" . $value["title"] . "</p>";
			echo "<p id='text'>" . $value["purpose"] . "</p>";
			echo "<a href=" . $value["link"] . " onclick='window.open(this.href); return false;'>Voir le projet</a>";
			echo "<a id='git_link' href=" . $value["git_link"] . " onclick='window.open(this.href); return false;'><img src='logo/icons8-github-prj.png' width='30px' height='30px'/></a>";
			echo "</div>";
			echo "</div>";
		}
	}
}

$query = $pdo->query("SELECT title, purpose, link, git_link, pctr_name, display FROM project");
$res = $query->fetchAll();
display($res);
?>