<?php

function display($res)
{
	echo "<table>";
	echo "<tr>";
	echo "<th>Nom</th>" . "<th>Description</th>" . "<th>Lien Direct</th>" . "<th>Lien Github</th>" . "<th>Nom de l'image</th>" ."<th>Visible</th>";
	echo "</tr>";
	foreach($res as $key => $elem)
	{
		echo "<tr>";
		echo "<form action='project_tool.php' method='post'>";
		echo "<input value='".$elem['id']."' name='id' type='hidden'</input>";
		echo '<td><input id="a'.$elem['id'].'" type="text" value="'. $elem['title'].'" maxlength="50" name="title" disabled></input></td>';
		echo '<td><input id="a'.$elem['id'].'" type="text" value="'. $elem['purpose'].'" maxlength="500" name="purpose" disabled></input></td>';
		echo '<td><input id="a'.$elem['id'].'" type="text" value="'. $elem['link'].'" maxlength="100" name="link" disabled></input></td>';
		echo '<td><input id="a'.$elem['id'].'" type="text" value="'. $elem['git_link'].'" maxlength="100" name="git_link" disabled></input></td>';
		echo '<td><input id="a'.$elem['id'].'" type="text" value="'. $elem['pctr_name'].'" maxlength="50" name="pctr_name" disabled></input></td>';
		if ($elem['display'] == 1)
			echo "<td><input type='checkbox' id='a".$elem['id']."' name='display' checked disabled></input></td>";
		else
			echo "<td><input type='checkbox' id='a".$elem['id']."' name='display' disabled></input></td>";
		echo "<td>";
		echo "<button class='chg' id='a".$elem['id']."' type='submit' name='chg'>Valider</button>";
		echo "<button class='activate' id='".$elem['id']."' onclick='act_project(this.id, this)' type='button'>Modifier</button>";
		echo "</td>";
		echo "</form>";
		echo "<td><input type='checkbox' id='".$elem['id']."' name='".$elem['id']."' </td>";
		echo "</tr>";
	}
	echo "</table>";
}

$query = $pdo->query("SELECT id, title, purpose, link, git_link, pctr_name, display FROM project");
if ($query != 'false')
{
	$res = $query->fetchAll();
	if (!empty($res))
		display($res);
	else
	echo "<p>Aucun projet enregistré</p>";
}
else
{
	echo "<p>Erreur interne</p>";
}