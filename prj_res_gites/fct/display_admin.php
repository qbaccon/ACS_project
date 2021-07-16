<?php
require_once("db_con.php");

function display($res)
{
	foreach($res as $key => $elem)
	{
		echo "<form method='post' action='gites_tool.php'>";
		echo "<div id='container'>";	
		echo "<input value='".$elem['id']."' name='id' type='hidden'></input>";
		echo "<div id='pctr'><img src='pctrs/".$elem['pctrs_link']."' height='250px' width='250px'></img></div>";
		echo "<div id='type'>";
		echo "<label for='type'>Type du gite</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['type']."' maxlength='50' name='type' disabled></input>";
		echo "</div>";
		echo "<div id='title'>";
		echo "<label for='title'>Nom du gite</label>";
		echo '<input class="a'.$elem['id'].'" type="text" value="'. $elem['title'].'" maxlength="50" name="title" disabled></input>';
		echo '</div>';
		echo '<div id="purpose">';
		echo "<label for='purpose'>Description</label>";
		echo '<textarea class="a'.$elem['id'].'"maxlength="1000" name="purpose" disabled>' . $elem['purpose'] . '</textarea>';
		echo '</div>';
		echo "<div id='pctrs_link'>";
		echo "<label for='pctrs_link'>Nom de l'image</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['pctrs_link']."' maxlength='500' name='pctr_link' disabled></input>";
		echo "</div>";
		echo "<div id='nb_bed'>";
		echo "<label for='nb_bed'>Nombre de lits</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['nb_bed']."' maxlength='10' name='nb_bed' disabled></input>";
		echo "</div>";
		echo "<div id='nb_bath'>";
		echo "<label for='nb_bath'>Nombre de SdB</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['nb_bath']."' maxlength='10' name='nb_bath' disabled></input>";
		echo "</div>";
		echo "<div id='geoloc'>";
		echo "<label for='geoloc'>Localisation</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['geoloc']."' maxlength='500' name='geoloc' disabled></input>";
		echo "</div>";
		echo "<div id='price'>";
		echo "<label for='price'>Tarif par nuit</label>";
		echo "<input class='a".$elem['id']."' type='text' value='". $elem['price']."' maxlength='50' name='price' disabled></input>";
		echo "</div>";
		echo "<div id='dispo'>";
		echo "<label for='dispo'>Disponibilité</label>";
		if ($elem['dispo'] == 1)
			echo "<div><input type='checkbox' class='a".$elem['id']."' name='dispo' checked disabled></input></div>";
		else
			echo "<div><input type='checkbox' class='a".$elem['id']."' name='dispo' disabled></input></div>";
		echo "</div>";
		echo "<div class='chg".$elem['id']."' id='chg'><button class='chg' id='a".$elem['id']."' type='submit' name='chg'>Valider</button></div>";
		echo "<div class='act' id='act".$elem['id']."'><button class='activate' id='".$elem['id']."' onclick='act_project(this.id, this)' type='button'>Modifier</button></div>";
		echo "<div class='suppr_select'><button id='".$elem['id']."' class='suppr_select' name='del'>Supprimer</button></div>";
		echo "</div>";
		echo "</form>";
	}
}

$query = $db->query("SELECT * FROM liste_gites");
if ($query != 'false')
{
	$res = $query->fetchAll();
	if (!empty($res))
		display($res);
	else
	echo "<p>Aucun gites enregistré</p>";
}
else
{
	echo "<p>Erreur interne</p>";
}